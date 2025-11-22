#include <conio.h>
#include <iostream>
#include <stdio.h>

using namespace std;

int lokal();

main()
{
    int a = 15;

    cout<<"Pemanggilan Variabel Lokal"<<endl;
    cout<<"\nNilai didalam fungsi main() = : "<<a;
    lokal();
    cout<<"\nNilai didalam fungsi main() = : "<<a;
    getch();
}

lokal()
{
    int a = 10;
    cout<<"\nNilai a didalam fungsi lokal() = "<<a;
}
