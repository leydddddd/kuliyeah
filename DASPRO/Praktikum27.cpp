//Penggunaan Operator NOT
#include <iostream>
using namespace std;

int main()
{
    int a, hasilSebenarnya, hasilNOT;
    cout<<"Masukkan Nilai A = ";cin>>a;

    hasilSebenarnya = (a + 5 < 15);
    hasilNOT = !(a + 5 < 15);

    cout<<"= Program Ekspresi NOT ="<<endl;
    cout<<"========================"<<endl;
    cout<<"Nilai A               = "<<a<<endl;
    cout<<"Nilai hasilSebenarnya = (A + 4 < 10) = "<<hasilSebenarnya<<endl;
    cout<<"Nilai hasilNOT        = !(hasilSebenarnya) atau !(A + 5 < 15) = "<<hasilNOT;
    return 0;
}
