#include <conio.h>
#include <stdio.h>
#include <iostream>

using namespace std;

int hitung(int b);
long hitung(long c);
float hitung(float d);

int main() {
    cout << "Hasilnya fungsi overload - 1: ";
    cout << hitung(4) << endl;
    cout << "Hasilnya fungsi overload -2: ";
    cout << hitung(2) << endl;
    cout << "Hasilnya fungsi overload -3: ";
    cout << hitung(3) << endl;
    getch();


}

int hitung(int b) {
    return (b*b);
}

long hitung(long c) {
    return (c*c);
}

double hitung(double d) {
    return (d*d);
}
