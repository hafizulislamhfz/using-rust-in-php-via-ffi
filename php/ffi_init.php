<?php
$ffi = FFI::cdef(
    "size_t r_strlen(const char *);
    unsigned long long r_fibonacci(unsigned int);", 
    "./../php_functions/target/release/libphp_functions.dylib"
);

function r_strlen($str) {
    global $ffi;
    return $ffi->r_strlen($str);
}

function r_fibonacci($n) {
    global $ffi;
    return $ffi->r_fibonacci($n);
}