// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: rev-byte.c
// Deskripsi	: Membuat Program Reverse Byte

#include <stdio.h>

int reverseBytes(int x) 
{
    return ((x & 0xFF) << 24) | (((x >> 8) & 0xFF) << 16) | (((x >> 16) & 0xFF) << 8) | ((x >> 24) & 0xFF);
}

int main() 
{
    int result = reverseBytes(0x01020304);
    printf("Result: 0x%.2X\n", result);
    return 0;
}
