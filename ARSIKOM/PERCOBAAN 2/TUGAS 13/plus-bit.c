// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: plus-bit.c
// Deskripsi	: Membuat Program Penjumlahan Bit

#include <stdio.h>
#include "plus-bit.h"

void plusBit(int a[], int b[], int hasil[], int panjang) 
{
    int carry = 0;
    for (int i = 0; i < panjang; i++) {
        int jumlah = a[i] + b[i] + carry;
        hasil[i] = jumlah % 2;
        carry = jumlah / 2;
    }
}