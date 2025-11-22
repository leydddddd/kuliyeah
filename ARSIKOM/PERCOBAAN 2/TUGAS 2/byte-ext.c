// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: byte-ext.c
// Deskripsi	: Membuat Program Ekstraksi Byte

#include <stdio.h>

int getByte(int x, int n) 
{
    return (x >> (n * 8)) & 0xFF;
}

int main() 
{
    int result = getByte(0x12345678, 1);
    printf("Result: 0x%.2X\n", result); 
    return 0;
}