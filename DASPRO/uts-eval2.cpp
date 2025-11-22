#include <iostream>

using namespace std;

int tanggal(int h, int b,int t)
{
    if(b == 1)
    {
        cout<<h<<" Januari "<<t;
    }
    else if(b == 2)
    {
        cout<<h<<" Februari "<<t;
    }
    else if(b == 3)
    {
        cout<<h<<" Maret "<<t;
    }
    else if(b == 4)
    {
        cout<<h<<" April "<<t;
    }
    else if(b == 5)
    {
        cout<<h<<" Mei "<<t;
    }
    else if(b == 6)
    {
        cout<<h<<" Juni "<<t;
    }
    else if(b == 7)
    {
        cout<<h<<" Juli "<<t;
    }
    else if(b == 8)
    {
        cout<<h<<" Agustus "<<t;
    }
    else if(b == 9)
    {
        cout<<h<<" September "<<t;
    }
    else if(b == 10)
    {
        cout<<h<<" Oktober "<<t;
    }
    else if(b == 11)
    {
        cout<<h<<" November "<<t;
    }
    else if(b == 12)
    {
        cout<<h<<" Desember "<<t;
    }
}

int main()
{
    int d, m, y;

    cout<<"Format Hari, Bulan, dan Tahun     "<<endl;
    cout<<"Contoh (22 10 2005)               "<<endl;
    cout<<"Masukkan Tanggal : ";
    cin>>d>>m>>y;


    tanggal(d, m, y);
}
