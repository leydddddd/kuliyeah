// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: kali-matrixs.c
// Deskripsi	: Kompilasi dari Penampil, Penjumlahan, dan Pengurangan Bit

#include <stdio.h>
#include "show-bit.h"
#include "plus-bit.h"
#include "minus-bit.h"

int main() 
{
    int panjang = 8; 

    int a[] = {1, 1, 1, 0, 0, 0, 1, 1}; 
    int b[] = {1, 1, 1, 1, 0, 0, 1, 0}; 

    printf("Angka 103 dalam representasi bit: ");
    showArray(a, panjang);

    printf("Angka 114 dalam representasi bit: ");
    showArray(b, panjang);

    int hasilPenjumlahan[panjang];
    plusBit(a, b, hasilPenjumlahan, panjang);
    printf("Hasil penjumlahan: ");
    showArray(hasilPenjumlahan, panjang);

    int hasilPengurangan[panjang];
    minusBit(a, b, hasilPengurangan, panjang);
    printf("Hasil pengurangan: ");
    showArray(hasilPengurangan, panjang);

    return 0;
}