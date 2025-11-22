#include <iostream>
#include <cmath>
using namespace std;

int main()
{
    // Kalkulator Luas Segitiga

    int a, t, sisiA, sisiB, sisiC;
    string pilihan;

    cout<<"Masukkan Nilai Alas = ";cin>>a;
    cout<<"Masukkan Nilai Tinggi = ";cin>>t;
    cout<<"Masukkan Nilai sisiA = ";cin>>sisiA;
    cout<<"Masukkan Nilai sisiB = ";cin>>sisiB;
    cout<<"Masukkan Nilai sisiC = ";cin>>sisiC;

    cout<<"Apa yang ingin dihitung (Luas/Keliling)? ";
    cin>>pilihan;

    if (pilihan == "Luas")
    {
        cout<<"Luas Segitiga = "<<(0.5*a*t)<<endl;
    }
    else if (pilihan == "Keliling")
    {
        cout<<"Keliling Segitiga = "<<(sisiA+sisiB+sisiC)<<endl;
    }
    else
    {
        cout << "Pilihan tidak valid." << endl;
    }
}
