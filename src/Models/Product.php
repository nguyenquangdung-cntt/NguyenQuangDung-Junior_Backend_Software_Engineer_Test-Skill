<?php

namespace ShippingCalculator\Models;

class Product {
    private float $amazonPrice;
    private float $weight;
    private float $width;
    private float $height;
    private float $depth;

    public function __construct(float $amazonPrice, float $weight, float $width, float $height, float $depth) {
        $this->amazonPrice = $amazonPrice;
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    public function getAmazonPrice(): float {
        return $this->amazonPrice;
    }

    public function getWeight(): float {
        return $this->weight;
    }

    public function getVolume(): float {
        return $this->width * $this->height * $this->depth;
    }
}

