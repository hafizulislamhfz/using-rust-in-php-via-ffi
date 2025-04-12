
# Using Rust in PHP via FFI

This document outlines the steps to integrate Rust functions into PHP using FFI.

## Requirements
- PHP >= 7.4 (with FFI extension enabled)
- Rust (latest stable version recommended)

## Step 1: Clone the repository

- Clone this repository to your local machine using Git:

  ```bash
  git clone https://github.com/hafizulislamhfz/using-rust-in-php-via-ffi.git
  ```

## Step 2. Enable FFI in PHP
- Ensure that FFI is enabled in your `php.ini`. If it is not enabled, modify the `php.ini`
  ```bash
  ffi.enable = true
  ```

## Step 3. Compile the Rust Project
- Go to the rust project:
  ```bash
  cd rust
  ```
- Build the Rust project in release mode to generate the `lib` file:
  ```bash
  cargo build --release
  ```

- Verify that the (macOS: ```librust.dylib```, Linux: ```librust.so```, or Windows: ```librust.dll```) file is created in the `rust/target/release/` directory.

## Step 4: Run the PHP Test
- Navigate to the php directory:
  ```bash
  cd ../php
  ```
- Execute the PHP script that uses FFI to call the Rust function:
  ```bash
  php test_fibonacci.php
  ```
- You should see the output displaying the time difference calculated between PHP and Rust.



## Troubleshooting
If you encounter errors like `Call to unknown method`, ensure that:
  - The function signature in Rust and PHP matches exactly.
  - The correct path to dynamic library (macOS: ```librust.dylib```, Linux: ```librust.so```, or Windows: ```librust.dll```) is provided in `php/ffi_init.php`.
  - FFI is enabled in PHP.

**Note:** This project has been tested and verified on macOS. If you encounter issues on Linux or Windows, please make sure you have the correct dynamic library path and that all prerequisites are correctly installed for those platforms.


## Thank You

Thank you for exploring this. I hope it helps you understand how to use Rust in PHP via FFI.

If you have any questions or run into any issues, feel free to contact me on [LinkedIn](https://www.linkedin.com/in/hafizulislamhfz).

**Stay curious, keep coding!**

