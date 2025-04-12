<?php
$ffi = FFI::cdef(
    // Define the function signatures of the Rust functions we want to call
    "size_t r_strlen(const char *);
    unsigned long long r_fibonacci(unsigned int);", 
    // Path to the compiled dynamic library (Rust's .dylib file) on macOS
    // For Linux, this would be librust.so, and for Windows, it would be librust.dll
    "./../rust/target/release/librust.dylib"
);


// Function to make it easier to call the r_strlen function from Rust instead of $ffi->r_strlen()
function r_strlen($str) {
    global $ffi;
    return $ffi->r_strlen($str);
}

function r_fibonacci($n) {
    global $ffi;
    return $ffi->r_fibonacci($n);
}