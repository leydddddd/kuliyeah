#include <iostream>
using namespace std;

int main()
{
    //Pendeklarasian variable dan inisialisasi

    int x=0, y=0, a=0, b=0, c=0, d=0, e=0 ,f=0;

    //Masukkan
    cout<<"Masukkan Nilai X = ";cin>>x;
    cout<<"Masukkan Nilai Y = ";cin>>y;

    //Penggunaan Operasi Binary

    a=x+y;
    c=x%y;
    b=x-y;
    d=x*y;

    //Penggunaan Operasi Unary

    e = -x;
    f = +x;

    //Output
    cout<<"Hasil Dari A = X + Y = "<<a<<endl;
    cout<<"Hasil Dari B = X - Y = "<<b<<endl;
    cout<<"Hasil Dari C = X % Y = "<<c<<endl;
    cout<<"Hasil Dari D = X * Y = "<<d<<endl;
    cout<<"Hasil Dari E = -X = "<<e<<endl;
    cout<<"Hasil Dari F = +X = "<<f<<endl;

    return 0;
}
