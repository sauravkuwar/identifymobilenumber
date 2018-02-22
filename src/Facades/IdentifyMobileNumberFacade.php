<?php

namespace Saurav\IdentifyMobileNumber\Facades;

use Illuminate\Support\Facades\Facade;
use Saurav\IdentifyMobileNumber\Library\IdentifyMobileNumberLibrary;

class IdentifyMobileNumberFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'identify-mobile-number-library';
    }
}
