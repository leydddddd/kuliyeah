#include <iostream>
#include <conio.h>
#include <string.h>

using namespace std;

char coment (char ket[30], int n);

main() {
    char lagi, c[30];
    int i;
    atas:
        {
            cout << "Masukkan nilai = "; cin >> i;
            coment(c, i);
            cout << c;
            cout << "\n\nIngin input lagi [Y/T]: "; cin >> lagi;

        }



    if(lagi == 'Y' || lagi == 'y') {
        goto atas;
    } else {
        getch();
    }


}

char coment (char ket[30], int n) {
    int a;
    a = n %2;
    if(a == 1) {
        strcpy(ket, "---Bilangan Ganjil---");
    } else {
        strcpy(ket, "---Bilangan Genap---");
    }
}
