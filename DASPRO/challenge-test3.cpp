#include <iostream>
#include <cmath>

using namespace std;

double bentuk(int sisi);
double bentuk(float alas, int tinggi);
double bentuk(double rusuk, float tinggi);

int main()
{
    char ans;
    int s, a, t, r;
    double bil;
    double total = 0;

    cout<<"----Peraturan Penghitung----"<<endl;
    cout<<"Bilangan Positif = Luas Persegi    "<<endl;
    cout<<"Bilangan Negatif = Luas Segitiga   "<<endl;
    cout<<"Bilangan Desimal = Volume Tabung   "<<endl;
    cout<<endl;

    do
    {
        cout<<"Masukkan Bilangan        : ";cin>>bil;
        cout<<endl;

        if(bil - static_cast<int>(bil) != 0)
           {
               //Luas Segitiga
               cout<<"Masukkan Alas     : ";cin>>a;
               cout<<"Masukkan Tinggi   : ";cin>>t;
               cout<<endl;

               bentuk(static_cast<float>(a), static_cast<int>(t));
           }
        else if(bil < 0)
            {
                //Luas Persegi
               cout<<"Masukkan Sisi     : ";cin>>s;
               cout<<endl;

               bentuk(static_cast<int>(s));
            }
        else if(bil > 0)
            {
               cout<<"Masukkan Rusuk    : ";cin>>r;
               cout<<"Masukkan Tinggi   : ";cin>>t;
               cout<<endl;

               bentuk(static_cast<double>(r), static_cast<float>(t));
            }

            cout<<endl;
            cout<<"Lanjutkan Program [Y/N]  : ";cin>>ans;
            cout<<endl;

    }while(ans == 'Y');
}

double bentuk(int sisi)
{
    sisi = sisi * sisi;

    cout<<"Luas Persegi adalah      : "<<sisi;
    cout<<endl;

    return 0;
}

double bentuk(float alas, int tinggi)
{
    double total;

    total = 0.5 * alas * tinggi;

    cout<<"Luas Segitiga adalah     : "<<total;
    cout<<endl;

    return 0;
}

double bentuk(double rusuk, float tinggi)
{
    double total;

    total = M_PI * rusuk * rusuk * tinggi;

    cout<<"Volume Tabung adalah     : "<<total;
    cout<<endl;

    return 0;
}
