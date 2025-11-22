#include <iostream>
#include <iomanip>

using namespace std;

int main()
{
    int i,s;
    char nama[5][20];
    float nilai1[5];
    float nilai2[5];
    float nilai3[5];
    double hasil[5];

    cout<<"Masukkan Jumlah Mahasiswa : ";
    cin>>s;
    for (i=1;i<=s;i++)
    {
        cout<<"Data Ke - "<<i<<endl;
        cout<<"Nama Mahasiswa : ";cin>>nama[i];
        cout<<"Nilai Teori Daspro : ";cin>>nilai1[i];
        cout<<"Nilai Praktek Daspro : ";cin>>nilai2[i];
        hasil[i]=(nilai1[i]*0.40) + (nilai2[i]*0.60);
        cout<<endl;
    }
    cout<<"-------------------------------------------------------"<<endl;
    cout<<"No. Nama Mahasiswa Nilai Nilai Hasil"<<endl;
    cout<<"-------------------------------------------------------"<<endl;

    for(i=1;i<=s;i++)
    {
        cout<<setiosflags(ios::left)<<setw(4)<<i;
        cout<<setiosflags(ios::left)<<setw(6)<<nama[i];
        cout<<setprecision(2)<<"           "<<nilai1[i];
        cout<<setprecision(4)<<"           "<<nilai2[i];
        cout<<setprecision(6)<<"           "<<hasil[i]<<endl;
    }
    cout<<"-------------------------------------------------------";
    cout<<"------"<<endl;

    return 0;
}
