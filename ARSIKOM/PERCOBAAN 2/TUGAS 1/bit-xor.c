// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: bit-xor.c
// Deskripsi	: Membuat Program BIT XOR

#include <stdio.h>

int bitXor(int x, int y) 
{
    int result = (~x & y);
    result |= (~y & x);
    return result;
}

int main() 
{
    int result = bitXor(4, 5);
    printf("Result: %d\n", result);
    return 0;
}
