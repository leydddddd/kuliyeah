// Organisasi dan Arsitektur Komputer Tekom 2C
// Modul		:	1
// Percobaan	:	2
// Tanggal		:	22 April 2024
// Nama (NIM) 	:	Akbar Dwi Herlambang (2308979)
// Nama File	:	coba1.c 

void coba(int* x, int* y, int* z)
{
	// Kamus 
	double a; 
	double b; 
	double c; 
	double d;
	// Algoritma a = *x;
	b = *y; 
	c = *z; 
	d = a+b;
	*y = d;
	*z = b;
	*x = c;
}