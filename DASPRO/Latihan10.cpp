#include <iostream>
#include <string>

using namespace std;

int main()
{
    string sumKata;
    int total;

    cout<<"Masukkan Kalimat = ";
    getline(cin,sumKata);

    total = sumKata.length();

    cout<<"Panjang atau Jumlah Kata = "<<total;

    cin.get();
    return 0;
}
