#include<conio.h>
#include <stdio.h>
#include <iostream>

using namespace std;

int tambah(int m, int n);

main() {
    int a, b;
    a = 5;
    b = 9;

    cout << "Nilai sebelum fungsi digunakan ";
    cout << "\na = " << a << " b = " << b;
    tambah(a, b);
    cout << "\nNilai setelah fungsi digunakan";
    cout << "\na = " << a << " b = " << b;

    getch();
}

int tambah(int m, int n) {
    m+=5;
    n+=7;
    cout << "\n\nNilai di dalam fungsi tambah()";
    cout << "\nm = " << m << " n = " << n;
    cout << endl;
}
