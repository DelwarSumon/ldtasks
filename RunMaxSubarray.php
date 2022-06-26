<?php

/**
 * PHP version 8.1.6
 * 
 * @author Delwar Sumon <delwarsumon0@gmail.com>
 */

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';
use LeadDeskTasks\MaxSubarray\MaxSubarrayImplement;

$getMaxSum = new MaxSubarrayImplement();
$output = $getMaxSum->contiguous(array(-1, 1, 5, -6, 3));
echo "maximum contiguous sum is ". $output;