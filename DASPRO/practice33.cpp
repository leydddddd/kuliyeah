#include <iostream>

using namespace std;

void konversi(float dollar[])
{
    dollar[2] = dollar[0] * 14000;
    dollar[3] = dollar[0] * 0.85;

    cout<<dollar[0]<<" USD setara dengan "<<dollar[2]<<" IDR"; cout<<endl;
    cout<<dollar[0]<<" USD setara dengan "<<dollar[3]<<" Euro"; cout<<endl;
}

int main()
{
    float usd[3];

    cout<<"Masukkan nilai dalam USD : ";
    cin>>usd[0];

    konversi(usd);
}
