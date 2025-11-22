// Organisasi dan Arsitektur Komputer Tekom Kelas 2C
// Modul	:	1
// Percobaan	:	NA
// Tanggal	:	23 Juni 2022
// Nama (NIM) 	:	Jessy(13211007)
// Nama File	:	sumofsquare.c
// Deskripsi	:	Demonstrasi procedure call dan stack
//	Menghitung jumlah dari kuadrat bilangan

int square (int x)
{
    return x*x;
}

int squaresum (int y, int z)
{
    int temp1 = square(y);
    int temp2 = square(z);
    return temp1+temp2;
}

int main (void)
{
    int a = 5; int b = 9;
    return squaresum(a,b);
}

