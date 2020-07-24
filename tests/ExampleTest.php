<?php

namespace Karyam\LeaveManagement\Tests;

use Orchestra\Testbench\TestCase;
use Karyam\LeaveManagement\LeaveManagementServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LeaveManagementServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
