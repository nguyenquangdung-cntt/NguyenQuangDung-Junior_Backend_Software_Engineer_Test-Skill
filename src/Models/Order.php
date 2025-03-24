<?php

namespace ShippingCalculator\Models;

use ShippingCalculator\Services\ShippingFeeCalculator;

class Order {
    private array $products = [];
    private ShippingFeeCalculator $shippingCalculator;

    public function __construct(ShippingFeeCalculator $shippingCalculator) {
        $this->shippingCalculator = $shippingCalculator;
    }

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    public function calculateTotalPrice(): float {
        $total = 0;
        foreach ($this->products as $product) {
            $shippingFee = $this->shippingCalculator->calculate($product);
            $total += $product->getAmazonPrice() + $shippingFee;
        }
        return $total;
    }
}
