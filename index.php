<?php
require_once "vendor/autoload.php";

use ShippingCalculator\Models\Product;
use ShippingCalculator\Models\Order;
use ShippingCalculator\Services\ShippingFeeCalculator;

$calculator = new ShippingFeeCalculator(11, 11);
$order = new Order($calculator);

$order->addProduct(new Product(100, 2, 0.5, 0.5, 0.5));
$order->addProduct(new Product(50, 1, 0.3, 0.3, 0.3));

echo "Total Order Price: $" . $order->calculateTotalPrice();
