<?php

namespace HighLevel\Logging;

/**
 * Logger class for the GHL SDK
 * Provides level-based logging with configurable verbosity
 * 
 * @package HighLevel\Logging
 */
class Logger
{
    /**
     * Current log level
     * @var int
     */
    private int $level;

    /**
     * Prefix for log messages
     * @var string
     */
    private string $prefix;

    /**
     * Create a new Logger instance
     * 
     * @param string|int $level Log level (string or LogLevel constant)
     * @param string $prefix Prefix for log messages
     */
    public function __construct($level = LogLevel::WARN, string $prefix = 'GHL SDK')
    {
        $this->level = is_string($level) ? LogLevel::parse($level) : $level;
        $this->prefix = $prefix;
    }

    /**
     * Log an error message
     * 
     * @param string $message Error message
     * @param mixed ...$args Additional arguments to log
     * @return void
     */
    public function error(string $message, ...$args): void
    {
        if ($this->level >= LogLevel::ERROR) {
            $this->output('ERROR', $message, $args);
        }
    }

    /**
     * Log a warning message
     * 
     * @param string $message Warning message
     * @param mixed ...$args Additional arguments to log
     * @return void
     */
    public function warn(string $message, ...$args): void
    {
        if ($this->level >= LogLevel::WARN) {
            $this->output('WARN', $message, $args);
        }
    }

    /**
     * Log an info message
     * 
     * @param string $message Info message
     * @param mixed ...$args Additional arguments to log
     * @return void
     */
    public function info(string $message, ...$args): void
    {
        if ($this->level >= LogLevel::INFO) {
            $this->output('INFO', $message, $args);
        }
    }

    /**
     * Log a debug message
     * 
     * @param string $message Debug message
     * @param mixed ...$args Additional arguments to log
     * @return void
     */
    public function debug(string $message, ...$args): void
    {
        if ($this->level >= LogLevel::DEBUG) {
            $this->output('DEBUG', $message, $args);
        }
    }

    /**
     * Output a log message to server logs (never to web output)
     * Uses PHP's error_log() which respects php.ini settings and logs to:
     * - Error log file (if log_errors=On and error_log is set)  
     * - System log (if error_log=syslog)
     * - stderr (if running in CLI mode)
     * 
     * @param string $levelName Level name (ERROR, WARN, INFO, DEBUG)
     * @param string $message Log message
     * @param array<mixed> $args Additional arguments
     * @return void
     */
    private function output(string $levelName, string $message, array $args): void
    {
        $output = "[{$this->prefix}] {$levelName}: {$message}";
        
        if (!empty($args)) {
            $output .= ' ' . json_encode($args, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
        
        // Always use error_log() for server-side logging (like Node.js console.*)
        // This NEVER outputs to web response, always goes to server logs
        error_log($output);
    }

    /**
     * Check if a specific log level is enabled
     * 
     * @param int $level Log level to check
     * @return bool
     */
    public function isLevelEnabled(int $level): bool
    {
        return $this->level >= $level;
    }

    /**
     * Get the current log level
     * 
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set a new log level
     * 
     * @param string|int $level New log level
     * @return void
     */
    public function setLevel($level): void
    {
        $this->level = is_string($level) ? LogLevel::parse($level) : $level;
    }

    /**
     * Create a child logger with a different prefix but same level
     * 
     * @param string $prefix New prefix for the child logger
     * @return Logger
     */
    public function child(string $prefix): Logger
    {
        return new Logger($this->level, $prefix);
    }
}

