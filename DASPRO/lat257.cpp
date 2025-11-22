#include <conio.h>
#include <iostream>
#include <stdio.h>

using namespace std;

int a = 6;
void lokal();

main()
{
    cout<<"Penggunaan Variable Eksternal"<<endl;
    cout<<"\nNilai didalam fungsi main() = "<<a;
    lokal();
    cout<<"\nNilai Setelah Panggilan Fungsi lokal() = ";
    cout<<a;
    getch();
}

void lokal()
{
    a+=10;
}
