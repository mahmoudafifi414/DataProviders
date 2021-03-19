<?php


namespace Package\Infrastructure\DataProvider;


use Illuminate\Support\Collection;
use Package\Domain\IRepository;

abstract class DataProviderBaseRepository implements IRepository
{
    protected function getDataFromProvider(string $class, array|null $filters = null): Collection
    {
        $dataProvider = "Package\\Infrastructure\\Models\\" . $class;
        $dataProviderInstance = new $dataProvider;
        return $dataProviderInstance->getData($filters);
    }
}
