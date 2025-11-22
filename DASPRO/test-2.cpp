#include <iostream>
#include <cmath>

using namespace std;

int Gol1()
{
    return 10000;
}

int Gol2()
{
    return 15000;
}

int Gol3()
{
    return 20000;
}

int Gol4()
{
    return 30000;
}

int main()
{
    string name;
    int gol, jam, gaji;

    cout<<"Nama Karyawan        : ";
    cin>>name;
    cout<<"Golongan             : ";
    cin>>gol;
    cout<<"Jam Kerja            : ";
    cin>>jam;
    cout<<endl;

    cout<<"Nama Anda            : "<<name;
    cout<<endl;

    if(gol == 1)
    {
        gaji = jam * Gol1();
        cout<<"Gaji Anda            : "<<gaji;
    }

    else if(gol == 2)
    {
        gaji = jam * Gol2();
        cout<<"Gaji Anda            : "<<gaji;
    }
    else if(gol == 3)
    {
        gaji = jam * Gol3();
        cout<<"Gaji Anda            : "<<gaji;
    }
    else if(gol == 4)
    {
        gaji = jam * Gol4();
        cout<<"Gaji Anda            : "<<gaji;
    }
}
