<?php
include 'ffi_init.php';

echo "Fibonacci calculating using PHP and Rust FFI...\n";
// Set the Fibonacci number to calculate
$n = 40;

// Measure the execution time of the PHP Fibonacci function
$start = microtime(true);
php_fibonacci($n);
$phpTime = microtime(true) - $start;

// Measure the execution time of the Rust Fibonacci function via FFI
$start = microtime(true);
r_fibonacci($n);
$rustTime = microtime(true) - $start;

// Output the execution times for both PHP and Rust Fibonacci calculations
echo "PHP Fibonacci: $phpTime seconds\n";
echo "Rust FFI Fibonacci: $rustTime seconds\n";

// Recursive PHP Fibonacci function
function php_fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    return php_fibonacci($n - 1) + php_fibonacci($n - 2);
}

