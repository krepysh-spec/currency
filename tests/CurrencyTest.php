<?php

declare(strict_types=1);

namespace KrepyshSpec\World;

use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    /**
     * @return void
     */
    public function testInstantiationOfMyLibrary(): void
    {
        $obj = new Currency();
        $this->assertInstanceOf(Currency::class, $obj);
    }

    /**
     * @return void
     */
    public function testGetCurrency(): void
    {
        $currency = (new Currency())->usd;

        $this->assertIsArray($currency);
        $this->assertArrayHasKey('countryName', $currency);
        $this->assertArrayHasKey('name', $currency);
        $this->assertArrayHasKey('symbol', $currency);
    }

    /**
     * @return void
     */
    public function testGetNotIssetCurrency(): void
    {
        $currency = (new Currency())->test;

        $this->assertNull($currency);
    }

    /**
     * @return void
     */
    public function testGetAll(): void
    {
        $allCurrencies = Currency::all();

        $this->assertIsArray($allCurrencies);
    }


}