<?php

namespace NtSchool;

use Monolog\Logger;

class MonologLogger implements LoggerInterface {
    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function error(string $message) {
        $this->logger->error($message);
    }

    public function warning(string $message) {
        $this->logger->warning($message);
    }
}