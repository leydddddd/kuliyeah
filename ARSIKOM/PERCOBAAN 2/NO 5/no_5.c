// Organisasi dan Arsitektur Komputer Tekom 2B
// Modul	    :	1
// Percobaan	:	2
// Tanggal	    :	22 April 2024
// Nama (NIM) 	:	Akbar Dwi Herlambang (2308979)
// Nama File	:	no_5.c
// Deskripsi	:	Demonstrasi Pointer

#include <stdlib.h> 
#include <stdio.h>
#include "no_5.h"

typedef unsigned char *byte_pointer;
// address	= alamat dari variabel dalam memory
// size = ukuran bariable dalam memory (sizeoff)

void printByte(byte_pointer address, int size)
{
    int i;
    for (i = size-1; i >= 0; i--)
    {
        printf(" %.2x", address[i]);
    }
    printf("\n");
}

void printBit(size_t const size, void const * const address)
{
    unsigned char *b = (unsigned char*) address;
    unsigned char byte;

    int i, j; int space; space=0; printf(" ");
    for (i=size-1;i>=0;i--)
    {
        for (j=7;j>=0;j--)
    {

    byte = b[i] & (1<<j); byte >>= j; printf("%u", byte); space++;

    if (space>=4)
        {
            printf(" "); space=0;
        }
    }
}
    puts("");
}
