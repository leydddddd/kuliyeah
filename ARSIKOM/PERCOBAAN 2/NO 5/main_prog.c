// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: main_prog.c
// Deskripsi	: Program gabungan/kompilasi untuk input_no_5.c dan no_5.c

#include <stdio.h>
#include "input_no_5.h"
#include "no_5.h"

typedef unsigned char *byte_pointer;

int main()
{
	int number;
	
	number = input();
	
	printf("Representasi dalam byte: ");
    printByte((byte_pointer)&number, sizeof(int));
	
    printf("Representasi dalam bit: ");
    printBit(sizeof(int), &number);
	
    return 0;
}