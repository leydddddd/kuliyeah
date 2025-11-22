// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 1
// Tanggal		: 19 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: main.c
// Deskripsi	: Input dan Penjumlahan Bilangan dengan Pemanggilan sum pada add.c

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
    int a = 5;
    int b = 9;
    return squaresum(a,b);
}
