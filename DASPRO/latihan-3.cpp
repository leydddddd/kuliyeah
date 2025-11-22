#include <iostream>

using namespace std;

int main()
{
    float diskon;
    diskon=0.1;
    int harga_barang;
    cout<<"Masukkan Harga Barang = "; cin>>harga_barang;

    int setelah_diskon = (harga_barang-(harga_barang*diskon));
    cout<<"Hasil Setelah Diskon = "<< setelah_diskon;
}
