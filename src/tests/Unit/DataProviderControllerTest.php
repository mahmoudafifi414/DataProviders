<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use Package\Application\Controllers\DataProviderController;
use Package\Domain\IRepository;
use Package\Infrastructure\DataProvider\DataProviderRepository;
use Package\Infrastructure\Models\DataProviderX;
use Tests\TestCase;

class DataProviderControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDataProviderRepository()
    {
        $response = $this->get('/api/v1/users');

        $response->assertStatus(200);

    }
}
