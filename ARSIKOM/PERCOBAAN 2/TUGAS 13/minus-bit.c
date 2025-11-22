// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: minus-bit.c
// Deskripsi	: Membuat Program Pengurangan Bit

#include <stdio.h>
#include "minus-bit.h"

void minusBit(int a[], int b[], int hasil[], int panjang) 
{
    int borrow = 0;
    for (int i = 0; i < panjang; i++) {
        int selisih = a[i] - b[i] - borrow;
        if (selisih < 0) {
            hasil[i] = selisih + 2;
            borrow = 1;
        } else {
            hasil[i] = selisih;
            borrow = 0;
        }
    }
}