<?php
include 'ffi_init.php';

echo "Length of 'Hello, World!': " . r_strlen("Hello, World!") . "\n(used strlen function build in rust)\n";

