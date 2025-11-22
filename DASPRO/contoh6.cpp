#include <conio.h>

#include <stdio.h>
#include <iostream>

using namespace std;

int lokal();

main() {
    int a = 15;

    cout << "Pemanggilan variabel lokal" << endl;
    cout << "\nNilai di dalam fungsi main() = " << a;
    lokal();
    cout << "\nNilai di dalam fungsi main() = " << a;
    getch();
}

lokal() {
    int a = 10;
    cout << "\nNilai a di dalam fungsi lokal() = " << a;
}
