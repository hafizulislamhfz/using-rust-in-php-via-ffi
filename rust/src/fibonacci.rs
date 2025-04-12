// This function calculates the nth Fibonacci number using recursion.
// It is marked with #[no_mangle] to ensure the function name is not mangled during compilation,
#[no_mangle]
pub extern "C" fn r_fibonacci(n: u32) -> u64 {
    if n <= 1 {
        return n as u64;
    }
    r_fibonacci(n - 1) + r_fibonacci(n - 2)
}