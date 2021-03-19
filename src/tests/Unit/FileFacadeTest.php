<?php

namespace Tests\Unit;

use Package\Infrastructure\Models\DataProviderX;
use Tests\TestCase;

class FileFacadeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetFileData()
    {
        $fileFacade = new DataProviderX();
        $data = $fileFacade->getFileData();
        $this->assertIsArray($data);
    }
}
