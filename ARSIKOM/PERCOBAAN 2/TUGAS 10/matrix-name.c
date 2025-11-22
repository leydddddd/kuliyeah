// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: matrix-name.c
// Deskripsi	: Membuat Program Matriks Nama

#include <stdio.h>
#include <stdlib.h>

#define MAX_ROWS 10
#define MAX_COLS 50

int main() {
    char nama_orang[MAX_ROWS][MAX_COLS];
    int num_names; 

    printf("Masukkan jumlah nama orang: ");
    scanf("%d", &num_names);
    getchar(); 

        printf("Masukkan nama orang satu per satu:\n");
    for (int i = 0; i < num_names; i++) {
        printf("Nama orang %d: ", i + 1);
        fgets(nama_orang[i], MAX_COLS, stdin);
    }

    printf("\nMatriks nama_orang yang dimasukkan:\n");
    for (int i = 0; i < num_names; i++) {
        printf("%d: %s", i + 1, nama_orang[i]);
    }

    return 0;
}
