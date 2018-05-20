<?php

namespace Ailuoy\Context;

use Illuminate\Support\Arr;
use Illuminate\Support\Traits\Macroable;

class Context
{
    use Macroable;

    public static $instance;

    protected static $data = [];

    protected function __construct()
    {
        //
    }

    public static function create()
    {
        if (! isset(static::$instance)) {
            static::$instance = new self;
        }

        return static::$instance;
    }

    public static function set($key, $value)
    {
        Arr::set(self::$data, $key, $value);

        return self::class;
    }

    public static function has($key)
    {
        return array_key_exists($key, self::$data);
    }

    public static function input($key, $default = null)
    {
        return self::get($key, $default);
    }

    public static function get($key, $default = null)
    {
        return Arr::get(self::$data, $key, $default);
    }

    public static function all()
    {
        return self::$data;
    }

    public function __get($key)
    {
        return $this->get($key);
    }

    public function __set($key, $value)
    {
        return $this->set($key, $value);
    }
}
