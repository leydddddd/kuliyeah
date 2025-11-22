#include <iostream>

using namespace std;

double konversi(double inb);
double konversi(int inc);
double konversi(float ina);

int main()
{
    double masukkan;
    double total = 0;

    cout<<"----Peraturan Konversi----"<<endl;
    cout<<"Bilangan Positif = IDR    "<<endl;
    cout<<"Bilangan Negatif = Euro   "<<endl;
    cout<<"Bilangan Desimal = Dollar "<<endl;
    cout<<endl;

    for (int i = 1; i <= 3; i++)
    {
        cout << "Masukkan Pemasukkan  = ";
        cin >> masukkan;

        if(masukkan - static_cast<int>(masukkan) != 0)
           {
               masukkan = konversi(static_cast<double>(masukkan));
           }
        else if(masukkan < 0)
            {
                masukkan = konversi(static_cast<int>(masukkan));
            }
        else if(masukkan > 0)
            {
                masukkan = konversi(static_cast<float>(masukkan));
            }

        total += masukkan;
    }
    cout << "Total = " << total;

    return 0;
}

double konversi(double inb)
{
    //desimal ke dollar
    return inb * 15000;
}

double konversi(int inc)
{
    if(inc < 0)//bil negatif ke euro
    {
        inc = inc - inc - inc;
        return inc * 17000;
    }
}

double konversi(float ina)
{
    //bil positif return nilai
    return ina;
}
