#include <iostream>
#include <iomanip>

using namespace std;

int main()
{
    int j,a;
    char nama[20][20];
    float nilaiP[20];
    float nilaiT[20];
    float nilaiUTS[20];
    float nilaiUAS[20];
    float hasil[20];
    char huruf[5] = {'A', 'B', 'C', 'D', 'E'};

    cout<<"Masukkan Jumlah Mahasiswa = ";
    cin>>j;
    cout<<endl;

    for(a=1;a<=j;a++)
    {
        cout<<"Masukkan Nama Mahasiswa      = ";cin>>nama[a];
        cout<<"Masukkan Nilai Tugas         = ";cin>>nilaiT[a];
        cout<<"Masukkan Nilai Project       = ";cin>>nilaiP[a];
        cout<<"Masukkan Nilai UTS           = ";cin>>nilaiUTS[a];
        cout<<"Masukkan Nilai UAS           = ";cin>>nilaiUAS[a];
        hasil[a] = (nilaiP[a] * 0.3) + (nilaiT[a] * 0.3) + (nilaiUAS[a] * 0.15) + (nilaiUTS[a] * 0.15);

        if(hasil[a] > 90)
        {
            huruf[0];
        }
        else if(89 > hasil[a] > 80)
        {
            huruf[1];
        }
        else if(79 > hasil[a] > 70)
        {
            huruf[2];
        }
        else if(69 > hasil[a] > 50)
        {
            huruf[3];
        }
        else
        {
            huruf[4];
        }
    }
        cout<<endl;
    {
    cout<<"-------------------------------------------------------"<<endl;
    cout<<"No. Nama Mahasiswa Nilai Tugas Nilai Project NilaiUTS NilaiUAS Hasil"<<endl;
    cout<<"-------------------------------------------------------"<<endl;

    for(a=1;a<=j;a++)
    {
        cout<<setiosflags(ios::left)<<setw(4)<<j;
        cout<<setiosflags(ios::left)<<setw(6)<<nama[a];
        cout<<setprecision(2)<<"           "<<nilaiT[a];
        cout<<setprecision(4)<<"           "<<nilaiP[a];
        cout<<setprecision(6)<<"           "<<nilaiUTS[a];
        cout<<setprecision(12)<<"           "<<nilaiUAS[a];
        cout<<setprecision(24)<<"           "<<hasil[a];
        cout<<setprecision(128)<<"           "<<huruf[a];
        cout<<endl;
    }
    cout<<"-------------------------------------------------------";
    cout<<"------"<<endl;
    }
}
