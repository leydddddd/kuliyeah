#include <iostream>

using namespace std;

int main()
{
    //Dekalarasi Array Tiga Dimensi dengan Nama "Angka"
    //Deklarasi Jumlah Ukuran Pertama/Subskrip PErtama = 2
    //Jumlah ukuran Kedua = 3 & Jumlah Ukuran Ketiga = 4

    int angka [2][3][4];

    //Mendeklarasi Variable untuk Indeks Perulangan

    int i,j,k;

    cout<<"\t==============================";
    cout<<"\n\t==Contoh Array Tiga Dimensi ==\n";
    cout<<"\t==============================\n\n";

    //Mengisi nilai kedalam elemen-elemen array angka
    for (i=0;i<2;i++)
    {
        for(j=0;j<3;j++)
        {
            for(k=0;k<4;k++)
            {
                cout<<"Angka Indeks Ke ["<<i<<"]["<<j<<"]["<<k<<"]"<<" = ";
                cin>>angka[i][j][k];
            }
        }
    }
    cout<<"\n\n============================\n";
    cout<<"==Tampil nilai Elemen Array ==\n";
    cout<<"================================\n";
    //menampilkan nilai nagka dari setiap elemen array angka
    for(i=0;i<2;i++)
    {
        for(j=0;j<3;j++)
        {
            for(k=0;k<4;k++)
            {
                cout<<"Angka Indeks Ke ["<<i<<"]["<<j<<"]["<<k<<"]"<<" = "<<angka[i][j][k]<<endl;
            }
        }
    }
    return 0;
}
