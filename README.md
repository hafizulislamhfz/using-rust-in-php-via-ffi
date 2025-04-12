
# FFI with Rust and PHP on macOS

This document outlines the steps to integrate Rust functions into PHP using FFI on macOS.

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
- Build the Rust project in release mode to generate the `.dylib` file:
  ```bash
  cargo build --release
  ```

- Verify that the `librust.dylib` file is created in the `rust/target/release/` directory.

## Troubleshooting
If you encounter errors like `Call to unknown method`, ensure that:
  - The function signature in Rust and PHP matches exactly.
  - The correct path to `librust.dylib` is provided in `php/ffi_init.php`.
  - FFI is enabled in PHP.

## Notes
- You need to make sure the dynamic library (`.dylib`) is correctly built for macOS.
- Always match the function signature between PHP and Rust for correct FFI usage.
