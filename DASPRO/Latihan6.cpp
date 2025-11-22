#include <iostream>
using namespace std;

int main()
{
    int Nilai_UTS, Nilai_UAS, Nilai_Tugas, Nilai_Akhir;

    cout<<"Masukkan Nilai UTS = ";cin>>Nilai_UTS;
    cout<<"Masukkan Nilai UAS = ";cin>>Nilai_UAS;
    cout<<"Masukkan Nilai Tugas = ";cin>>Nilai_Tugas;

    Nilai_Akhir=((Nilai_UTS*0.35)+(Nilai_UAS*0.45)+(Nilai_Tugas*0.2));

    if (100 <= Nilai_Akhir <= 85)
    {
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = A";
    }
    else if (84 <= Nilai_Akhir <= 70)
    {
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";
    }
    else if (69 <= Nilai_Akhir <= 55)
    {
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";
    }
    else if (54 <= Nilai_Akhir <= 40)
    {
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";
    }
    else if (39 <= Nilai_Akhir)
    {
        cout<<"Nilai Akhir Anda = "<<Nilai_Akhir<<endl;" ";
        cout<<"Nilai Anda = B";
    }
}
