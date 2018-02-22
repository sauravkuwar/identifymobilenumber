<?php

namespace Saurav\IdentifyMobileNumber\Controllers;

use Illuminate\Http\Request;
use Saurav\IdentifyMobileNumber\Library\IdentifyMobileNumberLibrary;
use App\Http\Controllers\Controller;

class IdentifyMobileNumberController extends Controller
{
    public function index(IdentifyMobileNumberLibrary $identifyMobileNumber)
    {
        echo $identifyMobileNumber->check('9843642827');
        echo \IdentifyMobileNumber::check('98073a3730');

    }
}
