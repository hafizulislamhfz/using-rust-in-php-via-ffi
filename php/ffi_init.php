<?php
$ffi = FFI::cdef(
    // Define the function signatures of the Rust functions we want to call
    "size_t r_strlen(const char *);
    unsigned long long r_fibonacci(unsigned int);", 
    // Path to the compiled dynamic library (Rust's .dylib file) on macOS
    // For Linux, this would be librust.so, and for Windows, it would be librust.dll
    "./../rust/target/release/librust.dylib"
);

function r_strlen($str) {
    global $ffi;
    return $ffi->r_strlen($str);
}

function r_fibonacci($n) {
    global $ffi;
    return $ffi->r_fibonacci($n);
}