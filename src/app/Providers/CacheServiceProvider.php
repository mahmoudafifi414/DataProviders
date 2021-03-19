<?php


namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Package\Domain\ICache;
use Package\Infrastructure\Presistence\Redis\RedisCache;
class CacheServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->registerRedisCache();
    }

    private function registerRedisCache()
    {
        $this->app->bind(ICache::class,RedisCache::class);
    }

}
