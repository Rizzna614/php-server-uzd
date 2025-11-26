<?php

$orders = [
    ['order_id' => 1, 'customer' => 'Alise', 'product' => 'Grāmata'],
    ['order_id' => 1, 'customer' => 'Alise', 'product' => 'Pildspalva'],
    ['order_id' => 2, 'customer' => 'Bobs', 'product' => 'Dators'],
    ['order_id' => 2, 'customer' => 'Bobs', 'product' => 'Pelīte'],
    ['order_id' => 3, 'customer' => 'Čārlijs', 'product' => 'Kafijas automāts'],
];

echo "<h1>Orders</h1>";

echo "<ul>";
foreach ($orders as $i)
    {
       echo "<li>"."Order ID: ". $i["order_id"].", Customer: ".$i["customer"]. ", Product: ". $i["product"]."</li>";
    }
echo "</ul>";

//2.uzd

echo "<h1>Grouped orders</h1>";

$groupedOrders =
[
    [
        'order_id' => 1,
        'customer' => 'Alise',
        'products' => ['Grāmata', 'Pildspalva'],
    ],
    [
        'order_id' => 2,
        'customer' => 'Bobs',
        'products' => ['Dators', 'Pelīte'],
    ],
    [
        'order_id' => 3,
        'customer' => 'Čārlijs',
        'products' => ['Kafijas automāts'],
    ],
];

//print_r($groupedOrders);

echo "<ul>";
foreach ($groupedOrders as $i)
    {
        echo "<li>";
        echo "Order ID: ". $i["order_id"]. ", ";
        echo "Customer: ". $i["customer"]. ", ";
        echo "Products: ";
        foreach ($i["products"] as $n)
            {
                echo $n. ", ";
            };
        echo "</li>";
    };
echo "</ul>"

?>