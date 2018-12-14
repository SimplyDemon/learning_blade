<?php

namespace NtSchool;

interface LoggerInterface {
    public function warning(string $message);
    public function error(string $message);
}