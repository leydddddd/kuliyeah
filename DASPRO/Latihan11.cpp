#include <iostream>

using namespace std;

int main()
{
    int str1;
    int str2;
    int blank=' ';

    cout<<"Masukkan String 1 = "<<endl;
    cin>>str1;
    cout<<"Masukkan String 2 = "<<endl;
    cin>>str2;

    int str3 = str1 + blank + str2;
    cout<<"Hasil Penggabungan String 1 dan 2 = "<<str3<<endl;

    return 0;
}
