// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 1
// Tanggal		: 19 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: main.c
// Deskripsi	: Input dan Penjumlahan Bilangan dengan Pemanggilan sum pada add.c

#include "add.h"

int main(void) {
    int a, b, res;

    printf("Masukkan bilangan pertama: ");
    scanf("%d", &a);

    printf("Masukkan bilangan kedua: ");
    scanf("%d", &b);

    res = sum(a, b);
    printf("Hasil penjumlahan: %d\n", res);

    return 0;
}


