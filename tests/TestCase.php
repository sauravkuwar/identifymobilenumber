<?php

namespace Saurav\IdentifyMobileNumber\Test;

use Saurav\IdentifyMobileNumber\Facades\IdentifyMobileNumberFacade;
use Saurav\IdentifyMobileNumber\IdentifyMobileNumber;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return lasselehtinen\MyPackage\MyPackageServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [IdentifyMobileNumber::class];
    }

    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'IdentifyMobileNumberFacade' => IdentifyMobileNumberFacade::class,
        ];
    }
}
