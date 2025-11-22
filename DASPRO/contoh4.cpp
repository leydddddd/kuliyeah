#include <conio.h>
#include <stdio.h>
#include <iostream>

using namespace std;

int tambah(int *c, int *d);

main() {
    int a, b;
    a = 4;
    b = 6;

    cout << "Nilai sebelum pemanggilan fungsi";

    cout << "\na = " << a << " = " << b;
    tambah(&a, &b);
    cout << endl;
    cout << "\nNilai setelah pemanggilan fungsi";
    cout << "\na = " << a << " b = " << b;
    getch();

}

tambah(int *c, int *d) {
    *c += 7;
    *d += 5;
    cout << endl;
    cout << "\nNilai di akhir fungsi tambah()";
    cout << "\nc = " << *c << " d = " << *d;
}
