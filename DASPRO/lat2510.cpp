#include <conio.h>
#include <iostream>
#include <stdio.h>

using namespace std;

int hitung(int b);
long hitung(long c);
float hitung(float d);

int main()
{
    cout<<"Hasilnya Fungsi Overload -1 :";
    cout<<hitung(4)<<endl;
    cout<<"Hasilnya Fungsi Overload -2 :";
    cout<<hitung(2)<<endl;
    cout<<"Hasilnya Fungsi Overload -3 :";
    cout<<hitung(3)<<endl;
    getch();
}

int hitung(int b)
{
    return(b*b);
}
long hitung(long c)
{
    return(c*c);
}
double hitung(double d)
{
    return(d*d);
}
