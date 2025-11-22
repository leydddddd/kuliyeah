// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 2
// Tanggal		: 22 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: kali-matrixs.c
// Deskripsi	: Membuat Program Perkalian Matrix

#include <stdio.h>
#include <stdlib.h>

struct Matriks 
{
    int jumlahBaris;
    int jumlahKolom;
    int **nilai;
};

int** alloc(int baris, int kolom) 
{
    int **matriks = (int **)malloc(baris * sizeof(int *));
    for (int i = 0; i < baris; i++) 
	{
        matriks[i] = (int *)malloc(kolom * sizeof(int));
    }
    return matriks;
}

void input(struct Matriks *matriks) 
{
    printf("Masukkan matriks %d x %d:\n", matriks->jumlahBaris, matriks->jumlahKolom);
    for (int i = 0; i < matriks->jumlahBaris; i++) 
	{
        for (int j = 0; j < matriks->jumlahKolom; j++) 
		{
            scanf("%d", &matriks->nilai[i][j]);
        }
    }
}

struct Matriks* mulMatriks(struct Matriks *A, struct Matriks *B) 
{
    if (A->jumlahKolom != B->jumlahBaris) 
	{
        printf("Perkalian matriks tidak dapat dilakukan. Jumlah kolom matriks A harus sama dengan jumlah baris matriks B.\n");
        return NULL;
    }

    struct Matriks *hasil = (struct Matriks *)malloc(sizeof(struct Matriks));
    hasil->jumlahBaris = A->jumlahBaris;
    hasil->jumlahKolom = B->jumlahKolom;
    hasil->nilai = alloc(hasil->jumlahBaris, hasil->jumlahKolom);

    for (int i = 0; i < A->jumlahBaris; i++) 
	{
        for (int j = 0; j < B->jumlahKolom; j++) 
		{
            hasil->nilai[i][j] = 0;
            for (int k = 0; k < A->jumlahKolom; k++) 
			{
                hasil->nilai[i][j] += A->nilai[i][k] * B->nilai[k][j];
            }
        }
    }

    return hasil;
}

void show_matr(struct Matriks *matriks) 
{
    printf("Matriks %d x %d:\n", matriks->jumlahBaris, matriks->jumlahKolom);
    for (int i = 0; i < matriks->jumlahBaris; i++) 
	{
        for (int j = 0; j < matriks->jumlahKolom; j++) 
		{
            printf("%d ", matriks->nilai[i][j]);
        }
        printf("\n");
    }
}

void del_matr(struct Matriks *matriks) 
{
    for (int i = 0; i < matriks->jumlahBaris; i++) 
	{
        free(matriks->nilai[i]);
    }
    free(matriks->nilai);
    free(matriks);
}

int main() 
{
    struct Matriks A, B;
    printf("Masukkan ukuran matriks A (baris kolom): ");
    scanf("%d %d", &A.jumlahBaris, &A.jumlahKolom);
    printf("Masukkan ukuran matriks B (baris kolom): ");
    scanf("%d %d", &B.jumlahBaris, &B.jumlahKolom);

    A.nilai = alloc(A.jumlahBaris, A.jumlahKolom);
    B.nilai = alloc(B.jumlahBaris, B.jumlahKolom);

    input(&A);
    input(&B);

    struct Matriks *hasil = mulMatriks(&A, &B);
    if (hasil != NULL) 
	{
        show_matr(hasil);
        del_matr(hasil);
    }

    for (int i = 0; i < A.jumlahBaris; i++) 
	{
        free(A.nilai[i]);
    }
    free(A.nilai);
    for (int i = 0; i < B.jumlahBaris; i++) 
	{
        free(B.nilai[i]);
    }
    free(B.nilai);

    return 0;
}
