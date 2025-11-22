// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: matrix-point.c
// Deskripsi	: Membuat Program Matriks Pointer

#include <stdio.h>
#include <stdlib.h>

int main() {
    int jumlah_nama;
    printf("Masukkan jumlah nama orang: ");
    scanf("%d", &jumlah_nama);

    char *nama_orang[jumlah_nama];

    printf("Masukkan nama orang satu per satu:\n");
    for (int i = 0; i < jumlah_nama; i++) 
	{
        nama_orang[i] = (char *)malloc(50 * sizeof(char)); 

        printf("Nama orang %d: ", i + 1);
        scanf("%s", nama_orang[i]);
    }

    printf("\nMatriks nama_orang yang dimasukkan:\n");
    for (int i = 0; i < jumlah_nama; i++) 
	{
        printf("%d: %s\n", i + 1, nama_orang[i]);
        free(nama_orang[i]);
    }

    return 0;
}
