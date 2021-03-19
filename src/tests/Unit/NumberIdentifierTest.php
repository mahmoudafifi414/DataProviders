<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\App;
use Package\Domain\ICache;
use Package\Domain\NumberIdentifier;
use Package\Infrastructure\DataProvider\DataProviderRepository;
use Package\Infrastructure\Models\DataProviderX;
use Tests\TestCase;

class NumberIdentifierTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNumberIdentifier()
    {
        $numberIdentifier = NumberIdentifier::of(20);
        $this->assertIsNumeric($numberIdentifier->value());
        $this->assertEquals(20, $numberIdentifier->value());
        $this->assertIsNumeric($numberIdentifier->jsonSerialize());
        $this->assertEquals(20, $numberIdentifier->jsonSerialize());
    }
}
