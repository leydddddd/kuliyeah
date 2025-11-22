#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
    int tinggi;

    cout<<"Masukkan Tinggi Segitiga : "<<endl;
    cin>>tinggi;

    cout<<endl;
    cout<<"Segitiga siku-siku dengan tinggi "<<tinggi<<endl;

    for(int a=1;a<=tinggi;a++)
    {
        for(int b=1;b<=a;b++)
        {
            cout<< "*";
        }
        cout<<endl;
    }
    getch();
}
