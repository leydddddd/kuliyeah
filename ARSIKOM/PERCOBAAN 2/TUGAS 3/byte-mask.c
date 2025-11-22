// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: byte-mask.c
// Deskripsi	: Membuat Program Masking Byte

#include <stdio.h>

int bitMask(int high, int low) 
{
    if (high < low) 
	{
        return 0;
    }
    if (high > 31 || low > 31 || high < 0 || low < 0) 
	{
        return 0;
    }
    return ((1 << (high - low + 1)) - 1) << low;
}

int main() 
{
    int result = bitMask(5, 3);
    printf("Result: 0x%.2X\n", result);
    return 0;
}