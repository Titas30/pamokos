<?php

include 'helper.php';

$products = readFromCsv('products.csv');
$products = prepeareProducts