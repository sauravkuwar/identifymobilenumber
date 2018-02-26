<?php

namespace Saurav\IdentifyMobileNumber\Library;

use Config;

class IdentifyMobileNumberLibrary
{
    // protected $ntcKeys = config('identifymobilenumber.ntc');
    protected $ntcKeys;
    // protected $ncellKeys = config('identifymobilenumber.ncell');
    protected $ncellKeys;

    public function __construct()
    {
        $this->ntcKeys = Config::get('identifymobilenumber.ntc');
        $this->ncellKeys = Config::get('identifymobilenumber.ncell');
    }

    public function check(string $mobileNumber) : string
    {
        // Invalid
        // if contains alphanumberi or alphabet or if number is less or greater than 10
        if (!preg_match('/^[\d]*$/', $mobileNumber) || strlen($mobileNumber) != 10) {
            return 'NaN';
        }
        // Valid
        $key = substr($mobileNumber, 0, 3);
        if (in_array($key, $this->ntcKeys)) {
            return "NTC";
        } else if (in_array($key, $this->ncellKeys)) {
            return 'NCELL';
        } else {
            return 'NaN';
        }
    }

}
