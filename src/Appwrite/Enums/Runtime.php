<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Runtime implements JsonSerializable
{
    private static Runtime $NODE-18.0;
    private static Runtime $PHP-8.0;
    private static Runtime $RUBY-3.1;
    private static Runtime $PYTHON-3.9;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function NODE(): Runtime
    {
        if (!isset(self::$NODE-18.0)) {
            self::$NODE-18.0 = new Runtime('node-18.0');
        }
        return self::$NODE-18.0;
    }
    public static function PHP(): Runtime
    {
        if (!isset(self::$PHP-8.0)) {
            self::$PHP-8.0 = new Runtime('php-8.0');
        }
        return self::$PHP-8.0;
    }
    public static function RUBY(): Runtime
    {
        if (!isset(self::$RUBY-3.1)) {
            self::$RUBY-3.1 = new Runtime('ruby-3.1');
        }
        return self::$RUBY-3.1;
    }
    public static function PYTHON(): Runtime
    {
        if (!isset(self::$PYTHON-3.9)) {
            self::$PYTHON-3.9 = new Runtime('python-3.9');
        }
        return self::$PYTHON-3.9;
    }
}