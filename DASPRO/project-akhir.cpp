#include <iostream>
#include <cmath>

using namespace std;
int main()
{
    double deg, rad, milirad, minbus, grad, secbus, sum[10];
    int pilihan, pilihan_1, pilihan_2, pilihan_3, pilihan_4, pilihan_5, pilihan_6;

    do {

    cout<<endl;
    cout<<"Program Konversi Kemiringan Bidang"<<endl;
    cout<<"========================================"<<endl;
    cout<<"1. Konversi Derajat"<<endl;
    cout<<"2. Konversi Radian"<<endl;
    cout<<"3. Konversi MiliRadian"<<endl;
    cout<<"4. Konversi Menit Busur"<<endl;
    cout<<"5. Konversi Gradian"<<endl;
    cout<<"6. Konversi Detik Busur"<<endl;
    cout<<"========================================"<<endl;
    cout<<"0. Exit"<<endl;
    cout<<"==="<<endl;
    cout<<"==="<<endl;
    cout<<"Pilih Opsi Diatas : ";
    cin>>pilihan;
    cout<<endl;

        if (pilihan >= 1 && pilihan <= 6)
        {
            switch(pilihan)
            {
            case 1:
                cout<<"--Program Konversi Derajat"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|1. Konversi Derajat ke Radian"<<endl;
                cout<<"|2. Konversi Derajat ke MiliRadian"<<endl;
                cout<<"|3. Konversi Derajat ke Menit Busur"<<endl;
                cout<<"|4. Konversi Derajat ke Gradian"<<endl;
                cout<<"|5. Konversi Derajat ke Detik Busur"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|==="<<endl;
                cout<<"|==="<<endl;
                cout<<"|-Pilih Opsi Diatas : ";
                cin>>pilihan_1;

                switch(pilihan_1)
                {
                case 1:
                    cout << "Masukkan Derajat = ";
                    cin >> deg;

                    rad = (deg * M_PI / 180);
                    milirad = (deg * 1000 * M_PI / 180);
                    minbus = (deg * 60);
                    grad = (deg * 200 / 180);
                    secbus = (deg * 3600);

                    for (sum=0;sum<=4;sum++)
                    {
                        sum[sum] = rad;
                    }

                    cout<<"Hasil Konversi"<<endl;
                    for(int i=0;i<=5;i++)
                    {
                        cout<<sum[i]<<endl;
                    }
                break;

                case 2:
                    cout << "Masukkan Derajat = ";
                    cin >> deg;
                    milirad = (deg * 1000 * M_PI / 180);
                    cout << "MiliRadian dari " << deg << " adalah " << milirad << endl;
                    cout<<endl;
                break;

                case 3:
                    cout << "Masukkan Derajat = ";
                    cin >> deg;
                    minbus = (deg * 60);
                    cout << "Menit Busur dari " << deg << " adalah " << minbus << endl;
                    cout<<endl;
                break;

                case 4:
                    cout << "Masukkan Derajat = ";
                    cin >> deg;
                    grad = (deg * 200 / 180);
                    cout << "Gradian dari " << deg << " adalah " << grad << endl;
                    cout<<endl;
                break;

                case 5:
                    cout << "Masukkan Derajat = ";
                    cin >> deg;
                    secbus = (deg * 3600);
                    cout << "Detik Busur dari " << deg << " adalah " << secbus << endl;
                    cout<<endl;
                break;
                }

                break;

            case 2:
                cout<<"--Program Konversi Radian"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|1. Konversi Radian ke Derajat"<<endl;
                cout<<"|2. Konversi Radian ke MiliRadian"<<endl;
                cout<<"|3. Konversi Radian ke Menit Busur"<<endl;
                cout<<"|4. Konversi Radian ke Gradian"<<endl;
                cout<<"|5. Konversi Radian ke Detik Busur"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|==="<<endl;
                cout<<"|==="<<endl;
                cout<<"-Pilih Opsi Diatas : ";
                cin>>pilihan_2;

                switch(pilihan_2)
                {
                case 1:
                    cout << "Masukkan Radian = ";
                    cin >> rad;
                    deg = (rad * 180 / M_PI);
                    cout << "Derajat dari " << rad << " adalah " << deg << endl;
                    cout<<endl;
                break;

                case 2:
                    cout << "Masukkan Radian = ";
                    cin >> rad;
                    milirad = (rad * 1000);
                    cout << "MiliRadian dari " << rad << " adalah " << milirad << endl;
                    cout<<endl;
                break;

                case 3:
                    cout << "Masukkan Radian = ";
                    cin >> rad;
                    minbus = (rad * 180 * 60 / M_PI);
                    cout << "Menit Busur dari " << rad << " adalah " << minbus << endl;
                    cout<<endl;
                break;

                case 4:
                    cout << "Masukkan Radian = ";
                    cin >> rad;
                    grad = (rad * 200 / M_PI);
                    cout << "Gradian dari " << rad << " adalah " << grad << endl;
                    cout<<endl;
                break;

                case 5:
                    cout << "Masukkan Radian = ";
                    cin >> rad;
                    secbus = (rad * 180 * 3600 / M_PI);
                    cout << "Detik Busur dari " << rad << " adalah " << secbus << endl;
                    cout<<endl;
                break;
                }

                break;

            case 3:
                cout<<"--Program Konversi MiliRadian"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|1. Konversi Miliradian ke Derajat"<<endl;
                cout<<"|2. Konversi MiliRadian ke Radian"<<endl;
                cout<<"|3. Konversi Miliradian ke Menit Busur"<<endl;
                cout<<"|4. Konversi Miliradian ke Gradian"<<endl;
                cout<<"|5. Konversi Miliradian ke Detik Busur"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|==="<<endl;
                cout<<"|==="<<endl;
                cout<<"-Pilih Opsi Diatas : ";
                cin>>pilihan_3;

                switch(pilihan_3)
                {
                case 1:
                    cout << "Masukkan MiliRadian = ";
                    cin >> milirad;
                    deg = (milirad * 180 / (1000 * M_PI));
                    cout << "Derajat dari " << milirad << " adalah " << deg << endl;
                break;

                case 2:
                    cout<<endl;cout << "Masukkan MiliRadian = ";
                    cin >> milirad;
                    rad = (milirad / 1000);
                    cout << "Radian dari " << milirad << " adalah " << rad << endl;
                    cout<<endl;
                break;

                case 3:
                    cout << "Masukkan MiliRadian = ";
                    cin >> milirad;
                    minbus = (milirad * 180 * 60 / (1000 * M_PI));
                    cout << "Menit Busur dari " << milirad << " adalah " << minbus << endl;
                    cout<<endl;
                break;

                case 4:
                    cout << "Masukkan MiliRadian = ";
                    cin >> milirad;
                    grad = (milirad * 200 / (1000 * M_PI));
                    cout << "Gradian dari " << milirad << " adalah " << grad << endl;
                    cout<<endl;
                break;

                case 5:
                    cout << "Masukkan MiliRadian = ";
                    cin >> milirad;
                    secbus = (milirad * 180 * 3600 / (1000 * M_PI));
                    cout << "Detik Busur dari " << milirad << " adalah " << secbus << endl;
                    cout<<endl;
                break;
                }

                break;

            case 4:
                cout<<"--Program Konversi Menit Busur"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|1. Konversi Menit Busur ke Derajat"<<endl;
                cout<<"|2. Konversi Menit Busur ke Radian"<<endl;
                cout<<"|3. Konversi Menit Busur ke Miliradian"<<endl;
                cout<<"|4. Konversi Menit Busur ke Gradian"<<endl;
                cout<<"|5. Konversi Menit Busur ke Detik Busur"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|==="<<endl;
                cout<<"|==="<<endl;
                cout<<"-Pilih Opsi Diatas : ";
                cin>>pilihan_4;

                switch(pilihan_4)
                {
                case 1:
                    cout << "Masukkan Menit Busur = ";
                    cin >> minbus;
                    deg = (minbus / 60);
                    cout << "Derajat dari " << minbus << " adalah " << deg << endl;
                    cout<<endl;
                break;

                case 2:
                    cout << "Masukkan Menit Busur = ";
                    cin >> minbus;
                    rad = (minbus / 60);
                    cout << "Radian dari " << minbus << " adalah " << rad << endl;
                    cout<<endl;
                break;

                case 3:
                    cout << "Masukkan Menit Busur = ";
                    cin >> minbus;
                    milirad = (minbus * 1000 / 60);
                    cout << "MiliRadian dari " << minbus << " adalah " << milirad << endl;
                    cout<<endl;
                break;

                case 4:
                    cout << "Masukkan Menit Busur = ";
                    cin >> minbus;
                    grad = (minbus * 200 / 60);
                    cout << "Gradian dari " << minbus << " adalah " << grad << endl;
                    cout<<endl;
                break;

                case 5:
                    cout << "Masukkan Menit Busur = ";
                    cin >> minbus;
                    secbus = (minbus * 60);
                    cout << "Detik Busur dari " << minbus << " adalah " << secbus << endl;
                    cout<<endl;
                break;
                }
                break;

            case 5:
                cout<<"--Program Konversi Gradian"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|1. Konversi Gradian ke Derajat"<<endl;
                cout<<"|2. Konversi Gradian ke Radian"<<endl;
                cout<<"|3. Konversi Gradian ke Miliradian"<<endl;
                cout<<"|4. Konversi Gradian ke Menit Busur"<<endl;
                cout<<"|5. Konversi Gradian ke Detik Busur"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|==="<<endl;
                cout<<"|==="<<endl;
                cout<<"-Pilih Opsi Diatas : ";
                cin>>pilihan_5;

                switch(pilihan_5)
                {
                case 1:
                    cout << "Masukkan Gradian = ";
                    cin >> grad;
                    deg = (grad * 180 / 200);
                    cout << "Derajat dari " << grad << " adalah " << deg << endl;
                    cout<<endl;
                break;

                case 2:
                    cout << "Masukkan Gradian = ";
                    cin >> grad;
                    rad = (grad * M_PI / 200);
                    cout << "Radian dari " << grad << " adalah " << rad << endl;
                    cout<<endl;
                break;

                case 3:
                    cout << "Masukkan Gradian = ";
                    cin >> grad;
                    milirad = (grad * 1000 * M_PI / 200);
                    cout << "MiliRadian dari " << grad << " adalah " << milirad << endl;
                    cout<<endl;
                break;

                case 4:
                    cout << "Masukkan Gradian = ";
                    cin >> grad;
                    minbus = (grad * 60 / 200);
                    cout << "Menit Busur dari " << grad << " adalah " << minbus << endl;
                    cout<<endl;
                break;

                case 5:
                    cout << "Masukkan Gradian = ";
                    cin >> grad;
                    secbus = (grad * 3600 / 200);
                    cout << "Detik Busur dari " << grad << " adalah " << secbus << endl;
                    cout<<endl;
                break;
                }
                break;

            case 6:
                cout<<"--Program Konversi Detik Busur"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|1. Konversi Detik Busur ke Derajat"<<endl;
                cout<<"|2. Konversi Detik Busur ke Radian"<<endl;
                cout<<"|3. Konversi Detik Busur ke Miliradian"<<endl;
                cout<<"|4. Konversi Detik Busur ke Menit Busur"<<endl;
                cout<<"|5. Konversi Detik Busur ke Gradian"<<endl;
                cout<<"|========================================"<<endl;
                cout<<"|==="<<endl;
                cout<<"|==="<<endl;
                cout<<"-Pilih Opsi Diatas : ";
                cin>>pilihan_6;

                switch(pilihan_6)
                {
                case 1:
                    cout << "Masukkan Detik Busur = ";
                    cin >> secbus;
                    deg = (secbus / 3600);
                    cout << "Derajat dari " << secbus << " adalah " << deg << endl;
                    cout<<endl;

                break;

                case 2:
                    cout << "Masukkan Detik Busur = ";
                    cin >> secbus;
                    rad = (secbus * M_PI / 180 / 3600);
                    cout << "Radian dari " << secbus << " adalah " << rad << endl;
                    cout<<endl;

                break;

                case 3:
                    cout << "Masukkan Detik Busur = ";
                    cin >> secbus;
                    milirad = (secbus * 1000 * M_PI / 180 / 3600);
                    cout << "MiliRadian dari " << secbus << " adalah " << milirad << endl;
                    cout<<endl;
                break;

                case 4:
                    cout << "Masukkan Detik Busur = ";
                    cin >> secbus;
                    minbus = (secbus / 60 / 60);
                    cout << "Menit Busur dari " << secbus << " adalah " << minbus << endl;
                    cout<<endl;
                break;

                case 5:
                    cout << "Masukkan Detik Busur = ";
                    cin >> secbus;
                    grad = (secbus * 200 / 3600);
                    cout << "Gradian dari " << secbus << " adalah " << grad << endl;
                    cout<<endl;
                break;
                }
                break;
            }
        }
    }
    while (pilihan != 0);

    cout<<"Program Ditutup!."<<endl;

    return 0;
}
