<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ImageGravity implements JsonSerializable
{
    private static ImageGravity $CENTER;
    private static ImageGravity $TOP-LEFT;
    private static ImageGravity $TOP;
    private static ImageGravity $TOP-RIGHT;
    private static ImageGravity $LEFT;
    private static ImageGravity $RIGHT;
    private static ImageGravity $BOTTOM-LEFT;
    private static ImageGravity $BOTTOM;
    private static ImageGravity $BOTTOM-RIGHT;

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

    public static function CENTER(): ImageGravity
    {
        if (!isset(self::$CENTER)) {
            self::$CENTER = new ImageGravity('center');
        }
        return self::$CENTER;
    }
    public static function TOP_LEFT(): ImageGravity
    {
        if (!isset(self::$TOP-LEFT)) {
            self::$TOP-LEFT = new ImageGravity('top-left');
        }
        return self::$TOP-LEFT;
    }
    public static function TOP(): ImageGravity
    {
        if (!isset(self::$TOP)) {
            self::$TOP = new ImageGravity('top');
        }
        return self::$TOP;
    }
    public static function TOP_RIGHT(): ImageGravity
    {
        if (!isset(self::$TOP-RIGHT)) {
            self::$TOP-RIGHT = new ImageGravity('top-right');
        }
        return self::$TOP-RIGHT;
    }
    public static function LEFT(): ImageGravity
    {
        if (!isset(self::$LEFT)) {
            self::$LEFT = new ImageGravity('left');
        }
        return self::$LEFT;
    }
    public static function RIGHT(): ImageGravity
    {
        if (!isset(self::$RIGHT)) {
            self::$RIGHT = new ImageGravity('right');
        }
        return self::$RIGHT;
    }
    public static function BOTTOM_LEFT(): ImageGravity
    {
        if (!isset(self::$BOTTOM-LEFT)) {
            self::$BOTTOM-LEFT = new ImageGravity('bottom-left');
        }
        return self::$BOTTOM-LEFT;
    }
    public static function BOTTOM(): ImageGravity
    {
        if (!isset(self::$BOTTOM)) {
            self::$BOTTOM = new ImageGravity('bottom');
        }
        return self::$BOTTOM;
    }
    public static function BOTTOM_RIGHT(): ImageGravity
    {
        if (!isset(self::$BOTTOM-RIGHT)) {
            self::$BOTTOM-RIGHT = new ImageGravity('bottom-right');
        }
        return self::$BOTTOM-RIGHT;
    }
}