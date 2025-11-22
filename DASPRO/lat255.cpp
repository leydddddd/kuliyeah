#include <conio.h>
#include <iostream>
#include <stdio.h>

using namespace std;

float luas(int r)
{
    return(3.14*r*r);
}

float kel(int r)
{
    return(3.14*2*r);
}

main()
{
    int j;

    cout<<"Masukkan jari-jari = ";cin>>j;
    cout<<"Luas Lingkaran = "<<luas(j)<<endl;
    cout<<"Keliling Lingkaran = "<<kel(j)<<endl;
}
