#include <iostream>
using namespace std;

//Fungsi untuk menghitung bunga akhir setiap periode (tahun atau bulan)
double hitungBunga(double pinjaman, double bunga, int periode) {
    if (periode == 1) {
        //Jika pinjaman per tahun
        return pinjaman * (bunga / 100) * periode;
    } else if (periode == 2) {
        //Jika pinjaman per bulan
        return pinjaman * (bunga / 100 / 12) * periode; //Menghitung bunga per bulan
    }
    return 0;
}

int main() {
    char lanjut;

    do {
        double pinjaman, totalBunga = 0;
        int periode, jumlahPeriode;
        double bunga; //Memindahkan deklarasi variabel bunga ke dalam do-while

        cout<<"Pilih periode pinjaman (1: Tahun, 2: Bulan): ";
        cin>>periode;

        if (periode == 1) {
            cout<<"Masukkan jumlah tahun: ";
            cin>>jumlahPeriode;
        } else if (periode == 2) {
            cout<<"Masukkan jumlah bulan: ";
            cin>>jumlahPeriode;
        } else {
            cout<<"Periode tidak valid. Harap pilih 1 untuk tahun atau 2 untuk bulan.\n";
            continue; //Melanjutkan ke iterasi berikutnya dari loop do-while
        }

        cout<<"Masukkan jumlah pinjaman: Rp. ";
        cin>>pinjaman;

        //Pengecekan agar bunga yang dimasukkan tidak negatif
        do {
            cout<<"Masukkan persentase bunga (tidak boleh negatif): ";
            cin>>bunga;
            if (bunga < 0) {
                cout<<"Bunga tidak boleh negatif. Silakan masukkan kembali.\n";
            }
        } while (bunga < 0);

        //Menyesuaikan persentase bunga dengan periode
        if (periode == 2) {
            bunga /= 12; //Membagi persentase bunga per tahun menjadi persentase bunga per bulan
        }

        //Array untuk menyimpan bunga tiap periode
        double bungaPerPeriode[jumlahPeriode];

        for (int i = 0; i < jumlahPeriode; ++i) {
            //Menghitung bunga tiap periode dan menyimpannya dalam array
            bungaPerPeriode[i] = hitungBunga(pinjaman, bunga, periode);
            totalBunga += bungaPerPeriode[i]; //Menambahkan bunga ke total bunga
            pinjaman += bungaPerPeriode[i]; //Menambahkan bunga ke jumlah pinjaman untuk periode berikutnya
        }

        cout<<"\nRincian bunga per periode:\n";
        for (int i = 0; i < jumlahPeriode; ++i) {
            cout<<"Periode "<< i + 1 <<": Rp. "<<bungaPerPeriode[i] << endl;
        }

        cout<<"\nTotal bunga selama "<<jumlahPeriode;
        if (periode == 1) {
            cout<<" tahun";
        } else {
            cout<<" bulan";
        }
        cout<<": Rp. "<<totalBunga<<endl;

        //Pengecekan apakah pengguna ingin mengulang
        cout<<"\nApakah Anda ingin menghitung bunga lagi? (y/n): ";
        cin>>lanjut;
    } while (lanjut == 'y' || lanjut == 'Y');

    return 0;
}
