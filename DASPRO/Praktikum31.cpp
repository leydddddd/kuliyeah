#include <iostream>
#include <conio.h>
#include <string>
using namespace std;

int main()
{
    string kata;
    cout<<"Masukkan kata = BELAJAR"<<endl;
    cin>>kata;

    if (kata=="BELAJAR")
    {
        cout<<"Kata yang dimasukkan semua sesuai"<<endl;
    }
    else
    {
        cout<<"Kata yang dimasukkan tidak sesuai"<<endl;
    }
    getch();
}
