#include <iostream>
#include <string>

using namespace std;

struct Order
{
    int nomor_pesanan[6] = {21, 31, 41, 51, 61, 71};
    string nama_pelanggan[6] = {"Rehean Payjar", "Isang Nurdin", "Suprapto", "Hitler", "Sunarno", "Darsono"};
    string alamat_pengiriman[6] = {"Cipacing", "Antapani", "Jl Jaksa Agung", "German", "Jawa Barat", "Lampung"};
};

int main()
{
    Order cust;

    for(int i = 0; i < 6; i++)
    {
        cout<<"Nomor Pesanan       : "<<cust.nomor_pesanan[i]<<endl;
        cout<<"Nama Pelanggan      : "<<cust.nama_pelanggan[i]<<endl;
        cout<<"Alamat anda         : "<<cust.alamat_pengiriman[i]<<endl;
        cout<<endl;
    }
}
