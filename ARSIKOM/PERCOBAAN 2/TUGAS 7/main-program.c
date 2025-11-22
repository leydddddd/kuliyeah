// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: main-program.c
// Deskripsi	: Kompilasi dari Program Enkripsi dan Dekripsi

#include <stdio.h>
#include "enc.h"
#include "dec.h"

int main() 
{
    int input = 123456789;
	int key = 85;

    int encrypted = encrypt(input, key);
    printf("Enkripsi: %d\n", encrypted);

    int decrypted = decrypt(encrypted, key);
    printf("Dekripsi: %d\n", decrypted);

    return 0;
}
