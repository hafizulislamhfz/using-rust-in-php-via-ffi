// The `php_built_in_function` module contains the `strlen` module,
// which provides functionality to compute the length of a string.
// The `r_strlen` function is exposed for external usage (e.g., in PHP via FFI).

mod php_built_in_function {
    // Declare the `strlen` module
    pub mod strlen;
}

// Expose the `r_strlen` function from the `strlen` module for external usage
pub use php_built_in_function::strlen::r_strlen;

// The `fibonacci` module contains the function to calculate Fibonacci numbers.
mod fibonacci;
// Expose the `r_fibonacci` function for external usage
pub use fibonacci::r_fibonacci;
