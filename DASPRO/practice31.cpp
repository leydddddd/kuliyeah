#include <iostream>
#include <limits>

using namespace std;

//Prosedur untuk memasukkan Gaji yang telah di Input ke dalam Array
int InputGaji(int arr[], int karyawan)
{
        cout<<"Masukkan Gaji-Gaji daripada Karyawan\n";
        for(int i = 0; i < karyawan; ++i)
            {
                do
                {
                    cout<<"Gaji Karyawan "<<i+1<<": ";
                    cin>>arr[i];

                    if (cin.fail())
                    {
                        cout << "Input tidak valid. Silakan coba lagi.\n";
                        cin.clear();  // Menghapus status error pada cin
                    }
                }while(arr[i] == 0);
        }

    return 0;
}

void AverageGaji(const int arr[], int karyawan)
{
    //Jika input deklarasi pada Karyawan = 0, maka program tidak akan berjalan
    if (karyawan==0)
    {
        cout<<"Tidak ada input Gaji Karyawan \n";
        return;
    }

    //Menjumlahkan seluruh isi Array ke dalam Total secara bertahap dengan perulangan
    int total = 0;
    for (int i = 0; i < karyawan; ++i)
    {
        total += arr[i];
    }

    //Menghitung rata-rata dengan cara membagi variabel total yang telah berisi dengan jumlah Array, dengan jumlah karyawan yang di input
    double rataRata = static_cast<double>(total)/karyawan;
    cout<<"Rata-Rata Gaji Pekerja : "<<rataRata<<endl;
}

//fungsi utama/main
int main()
{

    int Jumlah_Karyawan;
    //Mengisi jumlah karyawan sebagai isi untuk deklarasi prosedur
    do
    {
    cout<<"Masukkan Jumlah daripada Karyawan : ";
    cin>>Jumlah_Karyawan;
    cout<<endl;

        if (cin.fail())
        {
                cout << "Input tidak valid. Silakan coba lagi.\n";
                cin.clear();
                cin.ignore(numeric_limits<streamsize>::max(), '\n');
        }
    }while(Jumlah_Karyawan == 0);

    //Memasukkan jumlah karyawan yang diinput kedalam variable integer array bernama "arrayGaji" untuk membatasi jumlah array
    int arrayGaji[Jumlah_Karyawan];

    //memanggil prosedur dan mengisi deklarasi dengan variabel yang telah tersedia yaitu "arrayGaji[Jumlah_Karyawan" sebagai "int arrr[]" dan "Jumlah_Karyawan" sebagai "int panjang"
    InputGaji(arrayGaji, Jumlah_Karyawan);
    AverageGaji(arrayGaji, Jumlah_Karyawan);
}
