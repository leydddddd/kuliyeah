// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: inverted-array.c
// Deskripsi	: Membuat Program Pembalik Array


#include <stdio.h>
#include <stdlib.h>

int main() {
    char characters[100]; 
    char ch;
    int count = 0;

    printf("Masukkan beberapa karakter (tekan Enter dua kali untuk selesai):\n");
    while (count < 100) 
	{
        ch = getchar();
        if (ch == '\n') 
		{
            ch = getchar();
            if (ch == '\n') 
			{
                break; 
            } else 
			{
                characters[count++] = '\n'; 
            }
        }
        characters[count++] = ch;
    }
    
    printf("Karakter yang dimasukkan secara terbalik:\n");
    for (int i = count - 1; i >= 0; i--) {
        putchar(characters[i]);
    }
    printf("\n");

    return 0;
}