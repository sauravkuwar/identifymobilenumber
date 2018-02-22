<?php

namespace Saurav\IdentifyMobileNumber\Test\Library;

use IdentifyMobileNumberFacade;
use Saurav\IdentifyMobileNumber\Test\TestCase;

class IdentifyMobileNumberLibraryTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */
    public function testMobileNumberProviderType()
    {
        $this->assertSame(IdentifyMobileNumberFacade::check("9843642827"), "NTC");
    }
}
