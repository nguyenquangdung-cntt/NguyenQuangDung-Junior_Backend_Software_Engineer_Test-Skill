<?php

namespace ShippingCalculator\Services;

use ShippingCalculator\Models\Product;

class ShippingFeeCalculator {
    private float $weightCoefficient;
    private float $dimensionCoefficient;

    public function __construct(float $weightCoefficient, float $dimensionCoefficient) {
        $this->weightCoefficient = $weightCoefficient;
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    public function calculate(Product $product): float {
        $feeByWeight = $product->getWeight() * $this->weightCoefficient;
        $feeByDimension = $product->getVolume() * $this->dimensionCoefficient;
        return max($feeByWeight, $feeByDimension);
    }
}
