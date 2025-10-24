# GoHighLevel PHP SDK

Official PHP SDK for the [GoHighLevel API](https://marketplace.gohighlevel.com/docs/). Build powerful integrations with the all-in-one marketing and CRM platform for agencies.

## Requirements

- PHP >= 7.4
- ext-json
- ext-curl
- composer

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
     'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret'
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
use HighLevel\Storage\ISessionData;

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
    'contacts.readonly contacts.write'
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
$ghl->getSessionStorage()->setSession($locationId, new ISessionData($tokenData));
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

```php
// Verify and process webhooks
$webhookSecret = 'your-webhook-secret';
$payload = $request->getBody()->getContents(); // raw request as string
$request->getHeaderLine('x-wh-signature'); // signature will be present in header which will be sent by HighLevel

$ghl->getWebhookManager()->processWebhook($payload, $signature, $_ENV['WEBHOOK_PUBLIC_KEY'], $_ENV['client_id']);

This method will verify the webhook signature first. If it is valid, then for INSTALL event it will automatically generate token for your location and store it in the relavant storage option. Similarly on UNINSTALL event, it will remove the token from the storage. 

$ghl->getWebhookManager()->verifySignature($payload, $signature, $_ENV['WEBHOOK_PUBLIC_KEY']);
You can use this method independently to verify the webhook signature by SDK. 
```

## Documentation

- [GoHighLevel API Documentation](https://marketplace.gohighlevel.com/docs/)

## Support

- [GitHub Issues](https://github.com/gohighlevel/highlevel-api-php/issues)

## License

This SDK is open-sourced software licensed under the [MIT license](LICENSE).

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

