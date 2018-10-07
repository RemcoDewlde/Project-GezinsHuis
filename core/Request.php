<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class Request
{
    public static function uri()
    {
        /**
         * trim() delete first and trailing '/'
         * parse_url() gets a specific part of the 'REQUEST_URI'
        */
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        /**
         * GET of POST method
         */
        return $_SERVER['REQUEST_METHOD'];
    }
}