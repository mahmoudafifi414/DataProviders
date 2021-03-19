<?php

namespace Tests\Unit;

use Package\Infrastructure\DataProvider\DataProviderRepository;
use Package\Infrastructure\Models\DataProviderX;
use Tests\TestCase;

class DataProviderFiltersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDataProviderRepository()
    {
        $dataProviderRepository = new DataProviderRepository();
        $response = $dataProviderRepository->getDataBasedOnFilters();
        $this->assertIsArray($response);
        $this->assertCount(2, $response);
    }

    public function testDataProviderRepositoryWithProviderFilter()
    {
        $dataProviderRepository = new DataProviderRepository();
        $filter = ['provider' => 'DataProviderX'];
        $response = $dataProviderRepository->getDataBasedOnFilters($filter);
        $this->assertIsArray($response);
        $this->assertCount(1, $response);
    }

    public function testDataProviderRepositoryWithCurrencyFilter()
    {
        $dataProviderRepository = new DataProviderRepository();
        $filter = ['currency' => 'USD'];
        $response = $dataProviderRepository->getDataBasedOnFilters($filter);
        $this->assertIsArray($response);
        $this->assertCount(1, $response);
    }

    public function testDataProviderRepositoryWithStatusCodeFilter()
    {
        $dataProviderRepository = new DataProviderRepository();
        $filter = ['statusCode' => 'authorised'];
        $response = $dataProviderRepository->getDataBasedOnFilters($filter);
        $this->assertIsArray($response);
        $this->assertCount(2, $response);
    }

    public function testDataProviderRepositoryWithAmountFilter()
    {
        $dataProviderRepository = new DataProviderRepository();
        $filter = ['balanceMin' => '10', 'balanceMax' => '300'];
        $response = $dataProviderRepository->getDataBasedOnFilters($filter);
        $this->assertIsArray($response);
        $this->assertCount(2, $response);
    }
    public function testDataProviderRepositoryWithAllFilters()
    {
        $dataProviderRepository = new DataProviderRepository();
        $filter = ['currency' => 'USD','balanceMin' => '10', 'balanceMax' => '300','statusCode' => 'authorised','provider' => 'DataProviderX'];
        $response = $dataProviderRepository->getDataBasedOnFilters($filter);
        $this->assertIsArray($response);
        $this->assertCount(1, $response);
    }
    public function testDataProviderRepositoryWithAllFiltersReturnEmpty()
    {
        $dataProviderRepository = new DataProviderRepository();
        $filter = ['currency' => 'USD','balanceMin' => '10', 'balanceMax' => '99','statusCode' => 'authorised','provider' => 'DataProviderX'];
        $response = $dataProviderRepository->getDataBasedOnFilters($filter);
        $this->assertIsArray($response);
        $this->assertCount(0, $response);
    }
    public function testBaseModelGetData(){
        $providerX = new DataProviderX();
        $filter = ['currency' => 'USD','balanceMin' => '10', 'balanceMax' => '300','statusCode' => 'authorised','provider' => 'DataProviderX'];
        $response = $providerX->getData($filter);
        $this->assertIsArray($response->all());
        $this->assertCount(1, $response->all());
    }
}
