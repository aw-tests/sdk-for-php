<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Browser implements JsonSerializable
{
    private static Browser $AA;
    private static Browser $AN;
    private static Browser $CH;
    private static Browser $CI;
    private static Browser $CM;
    private static Browser $CR;
    private static Browser $FF;
    private static Browser $SF;
    private static Browser $MF;
    private static Browser $PS;
    private static Browser $OI;
    private static Browser $OM;
    private static Browser $OP;
    private static Browser $ON;

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

    public static function AVANT_BROWSER(): Browser
    {
        if (!isset(self::$AVANT_BROWSER)) {
            self::$AVANT_BROWSER = new Browser('aa');
        }
        return self::$AVANT_BROWSER;
    }
    public static function ANDROID_WEB_VIEW_BETA(): Browser
    {
        if (!isset(self::$ANDROID_WEB_VIEW_BETA)) {
            self::$ANDROID_WEB_VIEW_BETA = new Browser('an');
        }
        return self::$ANDROID_WEB_VIEW_BETA;
    }
    public static function GOOGLE_CHROME(): Browser
    {
        if (!isset(self::$GOOGLE_CHROME)) {
            self::$GOOGLE_CHROME = new Browser('ch');
        }
        return self::$GOOGLE_CHROME;
    }
    public static function GOOGLE_CHROME(): Browser
    {
        if (!isset(self::$GOOGLE_CHROME_(I_OS))) {
            self::$GOOGLE_CHROME_(I_OS) = new Browser('ci');
        }
        return self::$GOOGLE_CHROME_(I_OS);
    }
    public static function GOOGLE_CHROME_MOBILE(): Browser
    {
        if (!isset(self::$GOOGLE_CHROME_(MOBILE))) {
            self::$GOOGLE_CHROME_(MOBILE) = new Browser('cm');
        }
        return self::$GOOGLE_CHROME_(MOBILE);
    }
    public static function CHROMIUM(): Browser
    {
        if (!isset(self::$CHROMIUM)) {
            self::$CHROMIUM = new Browser('cr');
        }
        return self::$CHROMIUM;
    }
    public static function MOZILLA_FIREFOX(): Browser
    {
        if (!isset(self::$MOZILLA_FIREFOX)) {
            self::$MOZILLA_FIREFOX = new Browser('ff');
        }
        return self::$MOZILLA_FIREFOX;
    }
    public static function SAFARI(): Browser
    {
        if (!isset(self::$SAFARI)) {
            self::$SAFARI = new Browser('sf');
        }
        return self::$SAFARI;
    }
    public static function MOBILE_SAFARI(): Browser
    {
        if (!isset(self::$MOBILE_SAFARI)) {
            self::$MOBILE_SAFARI = new Browser('mf');
        }
        return self::$MOBILE_SAFARI;
    }
    public static function MICROSOFT_EDGE(): Browser
    {
        if (!isset(self::$MICROSOFT_EDGE)) {
            self::$MICROSOFT_EDGE = new Browser('ps');
        }
        return self::$MICROSOFT_EDGE;
    }
    public static function MICROSOFT_EDGE(): Browser
    {
        if (!isset(self::$MICROSOFT_EDGE_(I_OS))) {
            self::$MICROSOFT_EDGE_(I_OS) = new Browser('oi');
        }
        return self::$MICROSOFT_EDGE_(I_OS);
    }
    public static function OPERA_MINI(): Browser
    {
        if (!isset(self::$OPERA_MINI)) {
            self::$OPERA_MINI = new Browser('om');
        }
        return self::$OPERA_MINI;
    }
    public static function OPERA(): Browser
    {
        if (!isset(self::$OPERA)) {
            self::$OPERA = new Browser('op');
        }
        return self::$OPERA;
    }
    public static function OPERA_NEXT(): Browser
    {
        if (!isset(self::$OPERA_(NEXT))) {
            self::$OPERA_(NEXT) = new Browser('on');
        }
        return self::$OPERA_(NEXT);
    }
}