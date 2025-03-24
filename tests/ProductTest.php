<?php

namespace ShippingCalculator\Tests;

use ShippingCalculator\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
    public function testProductCreation() {
        $product = new Product(500, 0.3, 0.1, 0.2, 0.05);
        
        $this->assertEquals(500, $product->getAmazonPrice());
        $this->assertEquals(0.3, $product->getWeight());
    }
}
