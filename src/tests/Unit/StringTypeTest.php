<?php

namespace Tests\Unit;
use Package\Domain\StringType;
use Tests\TestCase;

class StringTypeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testStringIdentifier()
    {
        $stringIdentifier = StringType::of('Hello');
        $this->assertIsString($stringIdentifier->value());
        $this->assertEquals("Hello", $stringIdentifier->value());
        $this->assertIsString($stringIdentifier->jsonSerialize());
        $this->assertEquals("Hello", $stringIdentifier->jsonSerialize());
    }
}
