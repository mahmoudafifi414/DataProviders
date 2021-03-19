<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\App;
use Package\Domain\ICache;
use Package\Infrastructure\DataProvider\DataProviderRepository;
use Package\Infrastructure\Models\DataProviderX;
use Tests\TestCase;

class CacheTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRedisCache()
    {
        $source = 'testKey';
        $cache = App::make(ICache::class);
        $data = '{"test":"somevalue"}';
        $cache->set($source, serialize($data));
        $dataReturned = unserialize($cache->get($source));
        $dataReturnedArr = json_decode($dataReturned, true);
        $this->assertIsArray($dataReturnedArr);
    }
}
