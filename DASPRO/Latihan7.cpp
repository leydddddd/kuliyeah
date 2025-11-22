#include <iostream>
#include <conio.h>

using namespace std;

int main()
{
    int input;
    double total = 0;
    for(int MingPen=1;MingPen<5;++MingPen)
    {
            cout<<"Masukkan Pengeluaran Pada Minggu "<<MingPen<<" : ";
            cin>>input;

            total += input;
    }
    double rata_rata = total/4;
    cout<<"Jumlah Pengeluaran = "<<rata_rata<<endl;
}
