#include <iostream>

using namespace std;

int main()
{
    //Deklarasi Array Dua Dimensi
    //Dengan Jumlah Elemen Baris = 3
    //Dan Jumlah Elemen Kolom = 2

    int matrika [3][2];
    int matrikb [3][2]={{1,2},{3,4},{5,6}};
    int matrikc [3][2];

    //Mendeklarasi Variable Untuk
    //Indeks Perulangan

    int i,j;

    cout<<"\t======================";
    cout<<"\n\t=Penjumlahan Matrik Ordo 3x2 =\n";
    cout<<"\t======================\n\n";

    //Mengisi Nilai Kedalam
    //Elemen-Elemen Array MatrikA
    //Sedangkan Elemen Elemen Array MatrikB
    //Sudah Diisi Saat Deklarasi (inisialisasi)

    for (i=0;i<3;i++)
    {
        for(j=0;j<2;j++)
        {
            cout<<"Matrik A ["<<i<<"]["<<j<<"]=";
            cin>>matrika[i][j];
        }
    }
    cout<<endl;
    //Melakukan penjumlahan array matrika dan matrikb
    //Dan Menyimpan Hasilnya ke Array MatrikC;

    for(i=0;i<3;i++)
    {
        for(j=0;j<2;j++)
        {
            matrikc[i][j]=matrika[i][j]+matrikb[i][j];
        }
    }

    //Menampilkan MatrikA
    cout<<"\nMatrik a\n";
    for(i=0;i<3;i++)
    {
        for(j=0;j<2;j++)
        {
            cout<<matrika[i][j]<<" ";
        }
        cout<<endl;
    }

    //Menampilkan MatrikB
    cout<<"\nMatrik b\n";
    for(i=0;i<3;i++)
    {
        for(j=0;j<2;j++)
        {
            cout<<matrikb[i][j]<<" ";
        }
        cout<<endl;
    }

    //Menampilkan MatrikC
    cout<<"\nMatrik c atau hasil \n";
    for(i=0;i<3;i++)
    {
        for(j=0;j<2;j++)
        {
            cout<<matrikc[i][j]<<" ";
        }
        cout<<endl;
    }
    return 0;
}
