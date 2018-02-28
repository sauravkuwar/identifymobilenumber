<?php

namespace Saurav\IdentifyMobileNumber\Controllers;

use Illuminate\Http\Request;
use Saurav\IdentifyMobileNumber\Library\IdentifyMobileNumberLibrary;
use App\Http\Controllers\Controller;

class IdentifyMobileNumberController extends Controller
{
    public function index(IdentifyMobileNumberLibrary $identifyMobileNumber)
    {
        $result = $identifyMobileNumber->check('9658002288');

        return view('identifymobilenumber::index', ['result' => $result]);
    }
}
