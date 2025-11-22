#include <iostream>

using namespace std;

void segitiga_siku(int height)
{
    for (int i = height; i >= 1; i--)
    {
        cout << endl;
        for (int j = 1;j <= i; j++)
        {
        cout << " *";
        }
    }

}

int main()
{
    int tinggi;

    cout<<"Masukkan Tinggi Segitiga     : ";
    cin>>tinggi;
    cout<<endl;

    segitiga_siku(tinggi);
}
