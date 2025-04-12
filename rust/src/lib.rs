mod strlen;

pub use strlen::r_strlen;

#[no_mangle]
pub extern "C" fn r_fibonacci(n: u32) -> u64 {
    if n <= 1 {
        return n as u64;
    }
    r_fibonacci(n - 1) + r_fibonacci(n - 2)
}



