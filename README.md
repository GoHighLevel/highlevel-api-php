# GoHighLevel PHP SDK

Official PHP SDK for the [GoHighLevel API](https://marketplace.gohighlevel.com/docs/). Build powerful integrations with the all-in-one marketing and CRM platform for agencies.

## Requirements

- PHP >= 7.4
- ext-json
- ext-curl
- composer

### Optional

The SDK ships with an in-memory `SessionStorage` implementation that works out of the box. If you want persistent MongoDB-backed session storage via `HighLevel\Storage\MongoDBSessionStorage`, install the MongoDB packages separately:

```bash
# PHP 7.4 / 8.0
composer require mongodb/mongodb:^1.17

# PHP 8.1+
composer require mongodb/mongodb:^2.0
```

You will also need the PECL `mongodb` extension (`pecl install mongodb`).

## Installation

Install the SDK using Composer:

```bash
composer require gohighlevel/api-client
```

## Examples
Please take a look at [Sample Apps](https://github.com/GoHighLevel/ghl-sdk-examples/tree/main/php)


## Quick Start

### Basic Usage with Private Integration Token

```php
<?php

require_once 'vendor/autoload.php';

use HighLevel\HighLevel;
use HighLevel\HighLevelConfig;
use HighLevel\Services\Contacts\Models\SearchBodyV2DTO;

// Initialize the client
$config = new HighLevelConfig([
    'privateIntegrationToken' => 'your-private-token-here'
]);

or with 

$config = new HighLevelConfig([
    'clientId' => 'your-client-id', // $_ENV['CLIENT_ID']
    'clientSecret' => 'your-client-secret' // $_ENV['CLIENT_SECRET']
]);

$ghl = new HighLevel($config);

// Get contacts
$requestBody = new SearchBodyV2DTO([
    'locationId' => 'zBG0T99IsBgOoXUrcROH',
    'pageLimit' => 1
]);
$contactsResponse = $ghl->contacts->searchContactsAdvanced($requestBody);

error_log('Fetched contacts: ' . json_encode($contactsResponse, JSON_PRETTY_PRINT));
```

### OAuth Authentication

```php
<?php

use HighLevel\HighLevel;
use HighLevel\HighLevelConfig;
use HighLevel\Storage\SessionData;

// Initialize with OAuth credentials
$config = new HighLevelConfig([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret'
]);

$ghl = new HighLevel($config);

// Step 1: Redirect user to authorization URL
$authUrl = $ghl->oauth->getAuthorizationUrl(
    'your-client-id',
    'https://your-app.com/callback',
    'contacts.readonly contacts.write' // add all scopes here(one space seperated)
);

header('Location: ' . $authUrl);
exit;

// Step 2: Exchange authorization code for access token (in callback)
$tokenData = $ghl->oauth->getAccessToken([
    'code' => $_GET['code'],
    'client_id' => 'your-client-id',
    'client_secret' => 'your-client-secret',
    'grant_type' => 'authorization_code'
]);

// Step 3: Store the session
$locationId = $tokenData->location_id
$ghl->getSessionStorage()->setSession($locationId, new SessionData($tokenData));
```

## Configuration Options

```php
$config = new HighLevelConfig([
    // Authentication (choose one)
    'privateIntegrationToken' => 'token',  // For private integrations
    'clientId' => 'id',                    // For OAuth
    'clientSecret' => 'secret',            // For OAuth
    'agencyAccessToken' => 'token',        // Temporary agency token
    'locationAccessToken' => 'token',      // Temporary location token
    
    // Optional settings
    'apiVersion' => '2021-07-28',          // API version
    'sessionStorage' => $customStorage,    // Custom storage implementation
    'logLevel' => 'warn'                   // debug|info|warn|error|silent

]);
```

### Custom Session Storage

Implement your own storage (database, Redis, etc.):

```php
<?php

use HighLevel\Storage\SessionStorage;

class DatabaseSessionStorage extends SessionStorage
{
    private $pdo;
    
    public function __construct(\PDO $pdo, $logger = null)
    {
        parent::__construct($logger);
        $this->pdo = $pdo;
    }
    
    public function setSession(string $resourceId, array $sessionData): void
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO ghl_sessions (resource_id, data, updated_at) 
             VALUES (?, ?, NOW()) 
             ON DUPLICATE KEY UPDATE data = ?, updated_at = NOW()'
        );
        $json = json_encode($sessionData);
        $stmt->execute([$resourceId, $json, $json]);
    }
    
    public function getSession(string $resourceId): ?array
    {
        $stmt = $this->pdo->prepare(
            'SELECT data FROM ghl_sessions WHERE resource_id = ?'
        );
        $stmt->execute([$resourceId]);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        return $result ? json_decode($result['data'], true) : null;
    }
    
    // Implement other required methods...
}

// Use custom storage
$pdo = new \PDO('mysql:host=localhost;dbname=myapp', 'user', 'password');
$config = new HighLevelConfig([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
    'sessionStorage' => new DatabaseSessionStorage($pdo)
]);
```

## Error Handling

```php
use HighLevel\GHLError;

try {
    $contact = $ghl->contacts->getContact([
        'contactId' => 'invalid-id',
        'locationId' => 'location-123'
    ]);
} catch (GHLError $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Status Code: " . $e->getStatusCode() . "\n";
    echo "Response: " . json_encode($e->getResponse()) . "\n";
}
```

## Webhook Support

`processWebhook` verifies the incoming signature, then for `INSTALL` events it auto-generates and stores a location access token, and for `UNINSTALL` events it removes the stored token. Two signature schemes are supported:

| Header | Scheme | Public key env var |
|---|---|---|
| `x-ghl-signature` | Ed25519 (preferred) | `WEBHOOK_SIGNATURE_PUBLIC_KEY` |
| `x-wh-signature` | RSA-SHA256 (legacy) | `WEBHOOK_PUBLIC_KEY` |

If both signatures are received, Ed25519 takes precedence.

### Configuration

Set the following environment variables in your app — the SDK reads them internally, so you never pass keys or the client id as method arguments:

```dotenv
WEBHOOK_SIGNATURE_PUBLIC_KEY=...   # Ed25519 public key
WEBHOOK_PUBLIC_KEY=...             # RSA public key (legacy)
CLIENT_ID=...                      # OAuth client id; enables appId validation
```

The SDK checks `$_ENV`, `$_SERVER`, and `getenv()` in that order, so it works under PHP-FPM, CLI, and frameworks like Laravel/Slim that hydrate `$_ENV` via `phpdotenv`.

### Usage

Pass only the raw payload and the signature header values from the incoming HTTP request:

```php
$payload = $request->getBody()->getContents();           // raw request body as string
$whSig   = $request->getHeaderLine('x-wh-signature')  ?: null; // RSA (legacy)
$ghlSig  = $request->getHeaderLine('x-ghl-signature') ?: null; // Ed25519

$result = $ghl->getWebhookManager()->processWebhook($payload, $whSig, $ghlSig);
```

### Response shape

`processWebhook` returns an associative array:

```php
[
    'processed'                    => true,           // bool — false if signature invalid or appId mismatch
    'type'                         => 'INSTALL',      // string — webhook event type
    'signatureType'                => 'ed25519',      // 'ed25519' | 'rsa' | null (null = skipped)
    'signatureValid'               => true,           // bool
    'skippedSignatureVerification' => false,          // bool — true if no key/signature was supplied
]
```

On failure it returns `['processed' => false, 'reason' => 'invalid_signature' | 'app_id_mismatch', ...]`.

### Verifying a signature manually

You can also verify a signature without running the full webhook pipeline. These helpers do take the public key as an argument, so you can verify against any key you already have in memory:

```php
// RSA-SHA256 (x-wh-signature)
$ghl->getWebhookManager()->verifySignature($payload, $signature, $rsaPublicKeyPem);

// Ed25519 (x-ghl-signature) — uses libsodium under the hood
$ghl->getWebhookManager()->verifyEd25519Signature($payload, $ghlSignature, $ed25519PublicKeyPem);
```

`verifyEd25519Signature` accepts the public key as PEM (SPKI), raw 32 bytes, 64-character hex, or base64. Requires the `sodium` extension, which is bundled with PHP 7.2+.

## Documentation

- [GoHighLevel API Documentation](https://marketplace.gohighlevel.com/docs/)

## Support

- [GitHub Issues](https://github.com/gohighlevel/highlevel-api-php/issues)

## License

This SDK is open-sourced software licensed under the [MIT license](LICENSE).

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

