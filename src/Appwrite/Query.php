<?php

namespace Appwrite;

class Query
{
    /**
     * Equal
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function equal(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'equal', $value);
    }

    /**
     * Not Equal
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function notEqual(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'notEqual', $value);
    }

    /**
     * Less Than
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function lessThan(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'lessThan', $value);
    }

    /**
     * Less Than or Equal
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function lessThanEqual(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'lessThanEqual', $value);
    }

    /**
     * Greater Than
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function greaterThan(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'greaterThan', $value);
    }

    /**
     * Greater Than or Equal
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function greaterThanEqual(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'greaterThanEqual', $value);
    }

    /**
     * Search
     *
     * @param string $attribute
     * @param string $value
     * @return string
     */
    public static function search(string $attribute, string $value): string
    {
        return self::addQuery($attribute, 'search', $value);
    }

    /**
     * Cursor After
     *
     * @param string $documentId
     * @return string
     */
    public static function cursorAfter(string $documentId): string {
        return 'cursorAfter("' . $documentId . '")';
    }

    /**
     * Cursor Before
     *
     * @param string $documentId
     * @return string
     */
    public static function cursorBefore(string $documentId): string {
        return 'cursorBefore("' . $documentId . '")';
    }

    /**
     * Order Asc
     *
     * @param string $attribute
     * @return string
     */
    public static function orderAsc(string $attribute): string {
        return 'orderAsc("' . $attribute . '")';
    }

    /**
     * Order Desc
     *
     * @param string $attribute
     * @return string
     */
    public static function orderDesc(string $attribute): string {
        return 'orderDesc("' . $attribute . '")';
    }

    /**
     * Limit
     *
     * @param int $limit
     * @return string
     */
    public static function limit(int $limit): string {
        return 'limit(' . $limit . ')';
    }

    /**
     * Offset
     *
     * @param int $offset
     * @return string
     */
    public static function offset(int $offset): string {
        return 'offset(' . $offset . ')';
    }

    /**
     * Add Query
     *
     * @param string $attribute
     * @param string $method
     * @param mixed $value
     * @return string
     */
    private static function addQuery(string $attribute, string $method, $value)
    {
        return is_array($value) ?  $method . '("' . $attribute . '", [' . implode(",", array_map(function ($item) {return self::parseValues($item);}, $value)) . '])' : $method . '("' . $attribute . '", [' .  self::parseValues($value) . '])';
    }

    /**
     * @param mixed $value
     * @return string
     */
    private static function parseValues($value): string
    {
        if (is_string($value)) {
            return '"' . $value . '"';
        }
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }
        return $value;
    }
}
