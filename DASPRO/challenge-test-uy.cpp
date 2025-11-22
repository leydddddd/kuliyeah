#include <iostream>

using namespace std;

void daftar_karyawan(int karyawan[])
{
    for(int i = 1; i <= karyawan; ++i)
    {
        cout<<"Nama Karyawan        : ";
        cin>>karyawan[i];
    }
}

int main()
{
    int officer[];
    cout<<"Berapa ?";
    cin>>officer[];

    daftar_karyawan(officer[])
}
