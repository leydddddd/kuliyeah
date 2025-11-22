#include <conio.h>
#include <stdio.h>
#include <iostream>

using namespace std;

int a = 6;
void lokal();

main() {
    cout << "Penggunaan variabel eksternal" << endl;
    cout << "\nNilai di dalam fungsi main() - " << a;
    lokal();
    cout << "\nNilai setelah panggilan fungsi lokal() = ";
    cout << a;
    getch();
}

void lokal() {
    a += 10;
}
