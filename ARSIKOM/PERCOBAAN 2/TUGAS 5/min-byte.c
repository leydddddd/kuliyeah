// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: min-byte.c
// Deskripsi	: Membuat Program Pengurangan Byte

#include <stdio.h>

int minBytes(int x, int y) {
    // Ambil byte paling rendah dari x
    int byteX = x & 0xFF;
    
    // Ambil byte paling rendah dari y
    int byteY = y & 0xFF;
    
    // Kembalikan nilai minimum dari kedua byte
    return byteX < byteY ? byteX : byteY;
}

int main() 
{
    int x = 0x15;
    int y = 0x07;
    
    int result = minBytes(x, y);
    
    printf("minBytes(0x%.8X): 0x%.8X\n", x, result);
    
    return 0;
}
