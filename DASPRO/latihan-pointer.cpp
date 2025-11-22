#include <iostream>

using namespace std;

void triangle(int *a, int *t)
{
    double luas = (1/2.0) * *a * *t;
    cout<<luas;
}

int main()
{
    int inputA;
    int inputT;

    cout<<"Masukkan Alas    : ";
    cin>>inputA;

    cout<<"Masukkan Tinggi  : ";
    cin>>inputT;

    cout<<"Luas Segitiga = ";
    triangle(&inputA, &inputT);

    return 0;
}
