// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: byte-ext.c
// Deskripsi	: Membuat Program Dekripsi

#include <stdio.h>
#include "dec.h"

int decrypt(int encrypted, int key) 
{
    int byte1 = encrypted & 0xFF;
    int byte2 = (encrypted >> 8) & 0xFF;
    int byte3 = (encrypted >> 16) & 0xFF;
    int byte4 = (encrypted >> 24) & 0xFF;
    
    byte1 ^= key;
    byte2 ^= key;
    byte3 ^= key;
    byte4 ^= key;
    
    return (byte4 << 24) | (byte3 << 16) | (byte2 << 8) | byte1;
}