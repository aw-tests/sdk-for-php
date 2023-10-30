<?php

namespace Appwrite\Enums;

use JsonSerializable;

class PasswordVersion implements JsonSerializable
{
    private static PasswordVersion $SHA1;
    private static PasswordVersion $SHA224;
    private static PasswordVersion $SHA256;
    private static PasswordVersion $SHA384;
    private static PasswordVersion $SHA512/224;
    private static PasswordVersion $SHA512/256;
    private static PasswordVersion $SHA512;
    private static PasswordVersion $SHA3-224;
    private static PasswordVersion $SHA3-256;
    private static PasswordVersion $SHA3-384;
    private static PasswordVersion $SHA3-512;

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

    public static function SHA1(): PasswordVersion
    {
        if (!isset(self::$SHA1)) {
            self::$SHA1 = new PasswordVersion('sha1');
        }
        return self::$SHA1;
    }
    public static function SHA224(): PasswordVersion
    {
        if (!isset(self::$SHA224)) {
            self::$SHA224 = new PasswordVersion('sha224');
        }
        return self::$SHA224;
    }
    public static function SHA256(): PasswordVersion
    {
        if (!isset(self::$SHA256)) {
            self::$SHA256 = new PasswordVersion('sha256');
        }
        return self::$SHA256;
    }
    public static function SHA384(): PasswordVersion
    {
        if (!isset(self::$SHA384)) {
            self::$SHA384 = new PasswordVersion('sha384');
        }
        return self::$SHA384;
    }
    public static function SHA512(): PasswordVersion
    {
        if (!isset(self::$SHA512/224)) {
            self::$SHA512/224 = new PasswordVersion('sha512/224');
        }
        return self::$SHA512/224;
    }
    public static function SHA512(): PasswordVersion
    {
        if (!isset(self::$SHA512/256)) {
            self::$SHA512/256 = new PasswordVersion('sha512/256');
        }
        return self::$SHA512/256;
    }
    public static function SHA512(): PasswordVersion
    {
        if (!isset(self::$SHA512)) {
            self::$SHA512 = new PasswordVersion('sha512');
        }
        return self::$SHA512;
    }
    public static function SHA3(): PasswordVersion
    {
        if (!isset(self::$SHA3-224)) {
            self::$SHA3-224 = new PasswordVersion('sha3-224');
        }
        return self::$SHA3-224;
    }
    public static function SHA3(): PasswordVersion
    {
        if (!isset(self::$SHA3-256)) {
            self::$SHA3-256 = new PasswordVersion('sha3-256');
        }
        return self::$SHA3-256;
    }
    public static function SHA3(): PasswordVersion
    {
        if (!isset(self::$SHA3-384)) {
            self::$SHA3-384 = new PasswordVersion('sha3-384');
        }
        return self::$SHA3-384;
    }
    public static function SHA3(): PasswordVersion
    {
        if (!isset(self::$SHA3-512)) {
            self::$SHA3-512 = new PasswordVersion('sha3-512');
        }
        return self::$SHA3-512;
    }
}