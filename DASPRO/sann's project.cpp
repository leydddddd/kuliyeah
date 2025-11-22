#include <iostream>
#include <limits>
using namespace std;

void hitungRataRataHarga(double hargaProduk[], int jumlahProdukTerjual) {
    double totalHarga = 0;
    for(int i = 0; i < jumlahProdukTerjual; ++i) {
        totalHarga += hargaProduk[i];
    }

    double rataRataHarga = totalHarga / jumlahProdukTerjual;
    cout << "Rata-rata harga produk yang terjual dalam sehari= " << rataRataHarga << endl;
}

int main() {
    int jumlahProdukTerjual;
    cout << "Program Penghitung Rata-Rata Harga" << endl;

    while (true) {
        cout << "Masukkan Jumlah Produk Terjual: ";
        cin >> jumlahProdukTerjual;

        if (cin.fail() || jumlahProdukTerjual <= 0) {
            cout << "Jumlah yang anda input tidak valid. Masukkan Ulang Jumlah Produk.\n";
            cin.clear();
            cin.ignore(numeric_limits<streamsize>::max(), '\n');
        } else {
            break;
        }
    }

    double hargaProduk[jumlahProdukTerjual];

    for (int i = 0; i < jumlahProdukTerjual; ++i) {
        while (true) {
            cout << "Masukkan Harga Produk " << i + 1 << ": ";
            cin >> hargaProduk[i];

            if (cin.fail() || hargaProduk[i] <= 0) {
                cout << "Harga yang anda input tidak valid. Masukkan Ulang Harga Produk.\n";
                cin.clear();
                cin.ignore(numeric_limits<streamsize>::max(), '\n');
            } else {
                break;
            }
        }
    }

    hitungRataRataHarga(hargaProduk, jumlahProdukTerjual);
    return 0;
}
