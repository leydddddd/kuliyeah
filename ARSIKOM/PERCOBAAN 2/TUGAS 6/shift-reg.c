// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: shift-reg.c
// Deskripsi	: Membuat Program Fungsi Shift Register

#include <stdio.h>

unsigned int global_var = 0x00000000;

void inisialisasi() 
{
    global_var = 0x00000000;
}

int shiftRegister(int x) 
{
    global_var = (global_var << 5) | (x & 0x1F);
    return global_var;
}

int main() 
{
    inisialisasi();

    printf("shiftRegister(0x04): 0x%.8X\n", shiftRegister(0x04));

    printf("shiftRegister(0x13): 0x%.8X\n", shiftRegister(0x13));

    return 0;
}
