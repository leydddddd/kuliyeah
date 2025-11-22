// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 1
// Tanggal		: 19 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: inputn.c
// Deskripsi	: Input untuk Fibonacci

#include <stdio.h>
#include "inputn.h"

int input_n()
{
    int a;
    do {
        printf("Masukkan angka (n >= 2): ");
        scanf("%d", &a);
        if (a < 2)
        {
            printf("Tolong Masukkan angka yang lebih besar daripada 2 \n");
        }
    } while (a < 2);

    return a;
}
