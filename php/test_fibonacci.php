<?php
include 'ffi_init.php';

$n = 40;

$start = microtime(true);
php_fibonacci($n);
$phpTime = microtime(true) - $start;

$start = microtime(true);
r_fibonacci($n);
$rustTime = microtime(true) - $start;

echo "PHP Fibonacci: $phpTime seconds\n";
echo "Rust FFI Fibonacci: $rustTime seconds\n";

function php_fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    return php_fibonacci($n - 1) + php_fibonacci($n - 2);
}

