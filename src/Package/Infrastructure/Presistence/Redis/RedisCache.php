<?php

namespace Package\Infrastructure\Presistence\Redis;

use Package\Domain\ICache;

use Illuminate\Support\Facades\Redis;

class RedisCache implements ICache
{

    public function get(string $key)
    {
        return Redis::get($key);
    }

    public function set($key, $value)
    {
        return Redis::set($key, $value);
    }
}
