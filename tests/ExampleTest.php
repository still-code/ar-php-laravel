<?php

namespace AtmCode\ArPhpLaravel\Tests;

use AtmCode\ArPhpLaravel\ArPhpLaravelServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function getPackageProviders()
    {
        return [ArPhpLaravelServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
