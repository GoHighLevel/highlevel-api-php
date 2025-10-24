<?php

namespace HighLevel\Logging;

/**
 * Log levels for the GHL SDK
 * Higher numbers include all lower level logs
 * 
 * @package HighLevel\Logging
 */
class LogLevel
{
    /**
     * No logs
     */
    public const NONE = 0;

    /**
     * Only errors
     */
    public const ERROR = 1;

    /**
     * Warnings + errors
     */
    public const WARN = 2;

    /**
     * Info + warnings + errors
     */
    public const INFO = 3;

    /**
     * All logs (most verbose)
     */
    public const DEBUG = 4;

    /**
     * Parse string log level to integer value
     * 
     * @param string $level String log level (none|error|warn|info|debug)
     * @return int LogLevel constant value
     */
    public static function parse(string $level): int
    {
        switch (strtolower($level)) {
            case 'none':
            case 'silent':
                return self::NONE;
            case 'error':
                return self::ERROR;
            case 'warn':
            case 'warning':
                return self::WARN;
            case 'info':
                return self::INFO;
            case 'debug':
                return self::DEBUG;
            default:
                return self::WARN; // Default fallback
        }
    }

    /**
     * Convert log level integer to string
     * 
     * @param int $level Log level constant
     * @return string
     */
    public static function toString(int $level): string
    {
        switch ($level) {
            case self::NONE:
                return 'none';
            case self::ERROR:
                return 'error';
            case self::WARN:
                return 'warn';
            case self::INFO:
                return 'info';
            case self::DEBUG:
                return 'debug';
            default:
                return 'warn';
        }
    }
}

