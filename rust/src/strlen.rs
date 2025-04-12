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
