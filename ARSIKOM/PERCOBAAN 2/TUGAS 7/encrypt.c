// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: encrypt.c
// Deskripsi	: Membuat Program Enkripsi

#include <stdio.h>
#include "enc.h"

int encrypt(int input, int key) 
{
    int byte1 = input & 0xFF;
    int byte2 = (input >> 8) & 0xFF;
    int byte3 = (input >> 16) & 0xFF;
    int byte4 = (input >> 24) & 0xFF;
    
    byte1 ^= key;
    byte2 ^= key;
    byte3 ^= key;
    byte4 ^= key;
    
    return (byte4 << 24) | (byte3 << 16) | (byte2 << 8) | byte1;
}