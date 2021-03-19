<?php


namespace Package\Infrastructure\DataProvider;


use Package\Application\config\DataProviders;

class DataProviderRepository extends DataProviderBaseRepository
{
    public function getDataBasedOnFilters(array|null $filters = null): array
    {
        $result = [];
        if (isset($filters['provider'])) {
            $result = $this->getDataFromProvider($filters['provider'], $filters)->all();
        } else {
            foreach (DataProviders::$dataProvidersClasses as $class) {
                $data = $this->getDataFromProvider($class, $filters);
                if ($data && count($data) > 0) {
                    $result = array_merge($result, $data->all());
                }
            }
        }
        return $result;
    }
}
