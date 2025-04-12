<?php
include 'ffi_init.php';

// Print the length of the string 'Hello, World!' by calling the r_strlen function defined in Rust via FFI
// The r_strlen function will return the length of the provided string
echo "Length of 'Hello, World!': " . r_strlen("Hello, World!") . "\n";

