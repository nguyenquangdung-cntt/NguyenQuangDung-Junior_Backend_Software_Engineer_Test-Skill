<?php

use PHPUnit\Framework\TestCase;
use ShippingCalculator\Models\Product;
use ShippingCalculator\Services\ShippingFeeCalculator;

class ShippingFeeCalculatorTest extends TestCase {
    public function testCalculateShippingFee() {
        $calculator = new ShippingFeeCalculator(11, 11);
        $product = new Product(100, 2, 0.5, 0.5, 0.5);

        $expectedFee = max(2 * 11, 0.5 * 0.5 * 0.5 * 11);
        $this->assertEquals($expectedFee, $calculator->calculate($product));
    }
}

