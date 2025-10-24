<?php

namespace HighLevel\Utils;

/**
 * Request utility functions for the GHL SDK
 * 
 * @package HighLevel\Utils
 */
class RequestUtils
{
    /**
     * Build URL from template and path parameters
     * 
     * @param string $template URL template with {param} placeholders
     * @param array<string, mixed> $pathParams Dictionary of path parameters
     * @return string URL with parameters replaced
     */
    public static function buildUrl(string $template, array $pathParams): string
    {
        $url = $template;
        foreach ($pathParams as $key => $value) {
            $url = str_replace("{{$key}}", rawurlencode((string) $value), $url);
        }
        return $url;
    }

    /**
     * Extract and categorize parameters by their location (path, query, header)
     * 
     * @param array<string, mixed> $params Dictionary of parameters
     * @param array<array<string, string>> $paramDefs List of parameter definitions with 'name' and 'in' fields
     * @return array<string, array<string, mixed>> Dictionary with 'path', 'query', 'header', and 'all' parameters
     */
    public static function extractParams(array $params, array $paramDefs): array
    {
        $result = [
            'path' => [],
            'query' => [],
            'header' => [],
            'all' => []
        ];

        if (empty($params)) {
            return $result;
        }

        foreach ($paramDefs as $paramDef) {
            $paramName = $paramDef['name'];
            
            if ($paramName === 'Authorization' || $paramName === 'Version') {
                continue;
            }

            // Convert name to camelCase for PHP parameter matching
            $camelCaseName = self::toCamelCase($paramName);
            
            if (!array_key_exists($camelCaseName, $params)) {
                continue;
            }

            $value = $params[$camelCaseName];
            
            $result['all'][$paramName] = $value;
            
            if ($paramDef['in'] === 'path') {
                $result['path'][$paramName] = $value;
            } elseif ($paramDef['in'] === 'query') {
                $result['query'][$paramName] = $value;
            } elseif ($paramDef['in'] === 'header') {
                $result['header'][$paramName] = (string) $value;
            }
        }

        return $result;
    }

    /**
     * Convert string to camelCase
     * 
     * @param string $name String to convert
     * @return string
     */
    private static function toCamelCase(string $name): string
    {
        // Convert kebab-case or snake_case to camelCase
        $name = str_replace(['-', '_'], ' ', $name);
        $name = ucwords($name);
        $name = str_replace(' ', '', $name);
        $name = lcfirst($name);
        
        return $name;
    }

    /**
     * Get authentication token from the HighLevel instance
     * 
     * @param \HighLevel\HighLevel $highLevelClient HighLevel client instance
     * @param array<string> $requirements Security requirements
     * @param array<string, mixed> $headers Request headers
     * @param array<string, mixed> $query Query parameters
     * @param mixed $body Request body
     * @param string|null $preferredType Preferred token type
     * @return string|null Authentication token or null
     */
    public static function getAuthToken(
        object $highLevelClient,
        array $requirements,
        array $headers,
        array $query,
        $body,
        ?string $preferredType = null
    ): ?string {
        if (empty($requirements)) {
            return null;
        }

        // Ensure we have a HighLevel instance with the required method
        if (!$highLevelClient || !method_exists($highLevelClient, 'getTokenForSecurity')) {
            return null;
        }

        return $highLevelClient->getTokenForSecurity(
            $requirements,
            $headers,
            $query,
            $body,
            $preferredType
        );
    }
}

