// This function calculates the length of a C-style string (null-terminated) passed as a pointer.
// It is marked with #[no_mangle] to ensure the function name is not mangled during compilation,

#[no_mangle]
pub extern "C" fn r_strlen(s: *const i8) -> usize {
    let mut count = 0;
    unsafe {
        while *s.offset(count as isize) != 0 {
            count += 1;
        }
    }
    count
}
