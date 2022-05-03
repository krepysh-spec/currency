<?php

declare(strict_types=1);

namespace KrepyshSpec\World;

use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetCurrency(): void
    {
        $this->assertEquals(Currency::COP, Currency::COP);
    }
}