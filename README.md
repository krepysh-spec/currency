# World Currency list in PHP constants and in array (Currency::USD)
[![Build Status](https://circleci.com/gh/krepysh-spec/currency.svg?style=shield)](https://circleci.com/gh/krepysh-spec/currency)
[![Latest Stable Version](http://poser.pugx.org/krepysh-spec/currency/v)](https://packagist.org/packages/krepysh-spec/currency) 
[![Total Downloads](http://poser.pugx.org/krepysh-spec/currency/downloads)](https://packagist.org/packages/krepysh-spec/currency)
[![Latest Unstable Version](http://poser.pugx.org/krepysh-spec/currency/v/unstable)](https://packagist.org/packages/krepysh-spec/currency)
[![License](http://poser.pugx.org/krepysh-spec/currency/license)](https://packagist.org/packages/krepysh-spec/currency)
[![PHP Version Require](http://poser.pugx.org/krepysh-spec/currency/require/php)](https://packagist.org/packages/krepysh-spec/currency)

If you need to work with currencies in the code and describe each time "USD", "EUR" ... then this solution is for you.
Enjoy ***echo Currency::EUR >>> "EUR"*** Don't repeat yourself in code.

![Alt Text](media/preview.gif)

### Features
- List of all world currencies;
- Additional fields ***countryName***, ***name***, ***symbol***;

### Install
```bash
composer require krepysh-spec/currency
```

### How it works

From constants:

```php
echo KrepyshSpec\World\Currency::ANG; // >> 'ANG'
echo KrepyshSpec\World\Currency::USD; // >> 'USD'
echo KrepyshSpec\World\Currency::EUR; // >> 'EUR'
```

Get all currencies from array:

```php
$allCurrencies = KrepyshSpec\World\Currency::all();
var_dump($allCurrencies);

/**
 ["AFN"]=>
  array(3) {
    ["countryName"]=>
    string(11) "Afghanistan"
    ["name"]=>
    string(19) "Afghanistan Afghani"
    ["symbol"]=>
    string(7) "&#1547;"
  }
  ["ARS"]=>
  array(3) {
    ["countryName"]=>
    string(9) "Argentina"
    ["name"]=>
    string(14) "Argentine Peso"
    ["symbol"]=>
    string(5) "&#36;"
  }
  ["AWG"]=>
  array(3) {
    ["countryName"]=>
    string(5) "Aruba"
    ["name"]=>
    string(13) "Aruban florin"
    ["symbol"]=>
    string(6) "&#402;"
  }
 ...
 */
```

### Support

For support, email evgeniymykhalichenko@gmail.com or telegram @krep1sh

### License

MIT