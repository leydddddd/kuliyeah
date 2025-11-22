// Organisisi dan Arsitektur Komputer Tekom Kelas 2C
// Modul		: 1
// Percobaan	: 1
// Tanggal		: 19 April 2024
// Nama (NIM) 	: Akbar Dwi Herlambang (2308979)
// Nama File	: code.c
// Deskripsi	: Proses Kompilasi Bahasa C Menggunakan GCC

#define N_LOOP 500 
int main(void)
{
	int indeks;
	int accumulator; indeks = 0;
	accumulator = 0; while(indeks<N_LOOP)
	{
		accumulator = accumulator + indeks; 
		indeks = indeks + 1;
	}
   return accumulator;
}

