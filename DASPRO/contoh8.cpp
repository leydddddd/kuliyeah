#include <conio.h>
#include <stdio.h>
#include <iostream>

using namespace std;

int walah();

main() {
    int k = 5;

    walah();
    walah();

    cout << "\nNilai K di dalam fungsi main() = " << k;
    getch();

}

walah() {
    static int k;
    k += 4;
    cout << "\nNilai K di dalam fungsi() - " << k;
}
