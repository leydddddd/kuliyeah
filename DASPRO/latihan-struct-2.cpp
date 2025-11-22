#include <iostream>
#include <string>

using namespace std;

struct cust_resto
{
    string nama;
    int no_meja;
    double total_tagihan;
};

int main()
{
    int jumlah_cust;

    cout<<"Masukkan Jumlah Cust = ";
    cin>>jumlah_cust;
    cout<<endl;

    cust_resto hiyaa[jumlah_cust];

    for(int i = 0; i < jumlah_cust; i++)
    {
        cout<<"Customer ke "<<i + 1<<endl;
        cout<<"Nama             : ";
        cin>>hiyaa[i].nama;
        cout<<"No Meja          : ";
        cin>>hiyaa[i].no_meja;
        cout<<"Total Tagihan    : "<<"Rp. ";
        cin>>hiyaa[i].total_tagihan;
        cout<<endl;
    }

    for(int i = 0; i < jumlah_cust; i++)
    {
        cout<<"Nama             : "<<hiyaa[i].nama<<endl;
        cout<<"No Meja          : "<<hiyaa[i].no_meja<<endl;
        cout<<"Total Tagihan    : "<<"Rp. "<<hiyaa[i].total_tagihan<<endl;
        cout<<endl;
    }
}
