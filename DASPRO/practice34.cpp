#include <iostream>

using namespace std;

void rental_buku(string name_penyewa, char kode, int banyak_buku)
{
    int total_sewa;

    if(kode == 'C')
    {
        int C = 10000;
        cout<<"Tarif Rp. 10.000"<<endl;
        cout<<"Jenis Buku   : Cerpen"<<endl;
        total_sewa = banyak_buku * C;
    }
    else if(kode == 'K')
    {
        int K = 15000;
        cout<<"Tarif Rp. 15.000"<<endl;
        cout<<"Jenis Buku   : Komik"<<endl;
        total_sewa = banyak_buku * K;
    }
    else if(kode == 'N')
    {
        int N = 20000;
        cout<<"Tarif Rp. 20.000"<<endl;
        cout<<"Jenis Buku   : Novel"<<endl;
        total_sewa = banyak_buku * N;
    }

    cout<<"Penyewa dengan nama "<<name_penyewa<<" jumlah bayar penyewaan sebesar Rp. "<<total_sewa<<endl;
}

int main()
{
    string penyewa;
    char kode_buku;
    int banyak_pinjam;

    cout<<"-RENTAL BUKU TEKKOM 23-"<<endl;
    cout<<"-----------------------"<<endl;
    cout<<"Nama Penyewa         : ";cin>>penyewa;
    cout<<"Kode Buku [C,K,N]    : ";cin>>kode_buku;
    cout<<"Banyak Pinjam        : ";cin>>banyak_pinjam;
    cout<<endl;

    rental_buku(penyewa, kode_buku, banyak_pinjam);
}
