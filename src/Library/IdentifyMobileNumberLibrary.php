<?php

namespace Saurav\IdentifyMobileNumber\Library;

class IdentifyMobileNumberLibrary
{
    protected $ntcKeys = ['984', '985', '986'];
    protected $ncellKeys = ['980', '981', '982'];

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
