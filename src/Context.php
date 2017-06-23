<?php

namespace Lingxi\Context;

use Illuminate\Support\Arr;
use Illuminate\Support\Traits\Macroable;

class Context
{
    use Macroable;

    public static $instance;

    protected $data = [];

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

    public function set($key, $value)
    {
        Arr::set($this->data, $key, $value);

        return $this;
    }

    public function has($key)
    {
        return array_key_exists($key, $this->data);
    }

    public function input($key, $default = null)
    {
        return $this->get($key, $default);
    }

    public function get($key, $default = null)
    {
        return Arr::get($this->data, $key, $default);
    }

    public function all()
    {
        return $this->data;
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
