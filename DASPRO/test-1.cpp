#include <iostream>
#include <cmath>

using namespace std;

float Balok(float P, float L, float T)
{
    return P * L * T;
}

float Kerucut(float R, float T)
{
    return (1.0 / 3) * M_PI * R * R * T;
}

float Tabung(float R, float T)
{
    return M_PI * R * R * T;
}

int main()
{

    int Pilihan;

    cout<<"Penghitung Volume        : "<<endl;
    cout<<"1. Balok     "<<endl;
    cout<<"2. Kerucut   "<<endl;
    cout<<"3. Tabung    "<<endl;
    cout<<"Pilihan  : ";
    cin>>Pilihan;
    cout<<endl;

    if(Pilihan == 1)
    {
        float P, L, T, V;

        cout<<"Masukkan Panjang         : ";
        cin>>P;
        cout<<"Masukkan Lebar           : ";
        cin>>L;
        cout<<"Masukkan Tinggi          : ";
        cin>>T;

        V = Balok(P, L, T);
        cout<<"Volume Balok     : "<<V;
        cout<<endl;
    }

    else if(Pilihan == 2)
    {
        float R, T, V;

        cout<<"Masukkan Jari-Jari       : ";
        cin>>R;
        cout<<"Masukkan Tinggi          : ";
        cin>>T;

        V = Kerucut(R, T);
        cout<<"Volume Kerucut   : "<<V;
        cout<<endl;
    }

    else if(Pilihan == 3)
    {
        float R, T, V;

        cout<<"Masukkan Jari-Jari       : ";
        cin>>R;
        cout<<"Masukkan Tinggi          : ";
        cin>>T;

        V = Tabung(R, T);
        cout<<"Volume Tabung     :"<<V;
        cout<<endl;
    }
}

