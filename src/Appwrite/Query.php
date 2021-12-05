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
     * Lesser
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function lesser(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'lesser', $value);
    }

    /**
     * Lesser or Equal
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function lesserEqual(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'lesserEqual', $value);
    }

    /**
     * Greater
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function greater(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'greater', $value);
    }

    /**
     * Greater or Equal
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function greaterEqual(string $attribute, $value): string
    {
        return self::addQuery($attribute, 'greaterEqual', $value);
    }

    /**
     * Contains
     *
     * @param string $attribute
     * @param mixed $value
     * @return string
     */
    public static function contains(string $attribute, array $value): string
    {
        return self::addQuery($attribute, 'contains', $value);
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
     * Add Query
     *
     * @param string $attribute
     * @param string $operator
     * @param mixed $value
     * @return string
     */
    private static function addQuery(string $attribute, string $oper, $value)
    {
        return is_array($value) ? $attribute . '.' . $oper . '(' . implode(",", array_map(function ($item) {return self::parseValues($item);}, $value)) . ')' : $attribute . '.' . $oper . '(' . self::parseValues($value) . ')';
    }

    /**
     * @param mixed $value
     * @return string
     */
    private static function parseValues($value): string
    {
        return is_string($value) ? '"' . $value . '"' : $value;
    }
}