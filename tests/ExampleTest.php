<?php

namespace AtmCode\ArPhpLaravel\Tests;

use Orchestra\Testbench\TestCase;
use AtmCode\ArPhpLaravel\ArPhpLaravelServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ArPhpLaravelServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
