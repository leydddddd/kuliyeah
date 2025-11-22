// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: show-bit.c
// Deskripsi	: Membuat Program Penampil Array Bit

#include <stdio.h>
#include "show-bit.h"

void showArray(int array[], int panjang) 
{
    for (int i = panjang - 1; i >= 0; i--) {
        printf("%d", array[i]);
    }
    printf("\n");
}





