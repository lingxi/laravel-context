<?php

namespace Kenuocn\Context;

use Illuminate\Support\Arr;
use Illuminate\Support\Traits\Macroable;

/**
 * Class Context
 * @package Kenuocn\Context
 */
class Context
{
    use Macroable;

    /**
     * @var
     */
    public static $instance;

    /**
     * @var array
     */
    protected static $data = [];

    /**
     * Context constructor.
     */
    protected function __construct()
    {
        //
    }

    /**
     * @return mixed
     */
    public static function create()
    {
        if (! isset(static::$instance)) {
            static::$instance = new self;
        }

        return static::$instance;
    }

    /**
     * @param $key
     * @param $value
     * @return string
     */
    public static function set($key, $value)
    {
        Arr::set(self::$data, $key, $value);

        return self::class;
    }

    /**
     * @param $key
     * @return bool
     */
    public static function has($key)
    {
        return array_key_exists($key, self::$data);
    }

    /**
     * @param      $key
     * @param null $default
     * @return mixed
     */
    public static function input($key, $default = null)
    {
        return self::get($key, $default);
    }

    /**
     * @param      $key
     * @param null $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        return Arr::get(self::$data, $key, $default);
    }

    /**
     * @return array
     */
    public static function all()
    {
        return self::$data;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->get($key);
    }

    /**
     * @param $key
     * @param $value
     * @return string
     */
    public function __set($key, $value)
    {
        return $this->set($key, $value);
    }
}
