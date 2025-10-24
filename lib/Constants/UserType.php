<?php

namespace HighLevel\Constants;

/**
 * User types in the HighLevel system
 * Used for OAuth flows and session management
 * 
 * @package HighLevel\Constants
 */
class UserType
{
    /**
     * Company/Agency level user type
     */
    public const COMPANY = 'Company';

    /**
     * Location level user type
     */
    public const LOCATION = 'Location';

    /**
     * Get all valid user types
     * 
     * @return array<string>
     */
    public static function all(): array
    {
        return [
            self::COMPANY,
            self::LOCATION
        ];
    }

    /**
     * Check if a user type is valid
     * 
     * @param string $type User type to validate
     * @return bool
     */
    public static function isValid(string $type): bool
    {
        return in_array($type, self::all(), true);
    }
}

