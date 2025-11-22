// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 1
// Tanggal		: 19 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: fibo_main.c
// Deskripsi	: Kompilasi dari inputn.c dan fibo.c

#include <stdio.h>
#include "inputn.h"
#include "fibo.h"

int main() 
{
	int sum = input_n();
    calc_fib(sum);
	
    return 0;
}

