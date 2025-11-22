// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 1
// Tanggal		: 19 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: fibo.c
// Deskripsi	: Untuk Menghitung Fibonacci

#include <stdio.h>
#include "fibo.h"

void calc_fib(int n) 
{
    int a = 0, b = 1, c;
	
    printf("Angka Fibonacci dari %d :\n", n);
    printf("%d, %d, ", a, b);
	
    for (int i = 3; i <= n; ++i) 
	{
		c = a + b;
        printf("%d, ", c);
        a = b;
        b = c;
    }
    printf("\n");
}
