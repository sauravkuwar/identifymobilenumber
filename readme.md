## About IdentifyMobileNumber

A simple library to detect mobile number provider. It is for NTC and NCELL in Nepal



## Instellation
*composer require saurav/identifymobilenumber

## Usage Example
use IdentifyMobileNumber

echo IdentifyMobileNumber::check('98073a3730'); // NaN
echo IdentifyMobileNumber::check('9807353730'); // NCELL
echo IdentifyMobileNumber::check('9843642827'); // NTC


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
