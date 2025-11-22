#include <iostream>
using namespace std;

int main()
{
    int Nilai_UTS, Nilai_UAS, Nilai_Tugas, Nilai_Akhir;

    cout<<"Masukkan Nilai UTS = ";cin>>Nilai_UTS;
    cout<<"Masukkan Nilai UAS = ";cin>>Nilai_UAS;
    cout<<"Masukkan Nilai Tugas = ";cin>>Nilai_Tugas;

    Nilai_Akhir=((Nilai_UTS*0.35)+(Nilai_UAS*0.45)+(Nilai_Tugas*0.2));

    switch (Nilai_Akhir)
    {
    case 85 ... 100:
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = A";break;
    case 70 ... 84:
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";break;
    case 55 ... 69:
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";break;
    case 40 ... 54:
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";break;
    case 39:
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";break;
    }
}
