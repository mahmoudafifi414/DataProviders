<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Package\Domain\IRepository;
use Package\Infrastructure\DataProvider\DataProviderRepository;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->registerCategoryRepository();
    }

    private function registerCategoryRepository()
    {
        $this->app->bind(IRepository::class, DataProviderRepository::class);
    }

}
