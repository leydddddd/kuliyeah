#include <iostream>

using namespace std;

int main()
{
    string nameStud[100];
    string hstName;
    string hstNim;
    string nimStud[100];

    int sumStud;
    int score[100];
    int max = 0;
    int hstInc[100];
    int hstCount = 0;
    double average = 0;

    cout<<"Masukkan Jumlah Mahasiswa = ";
    cin>>sumStud;
    cout<<endl;

    cout<<"***Silahkan Input Data***";
    cout<<endl;

    for(int i=1;i<=sumStud;i++)
    {
        cout<<"Masukkan Nama Mahasiswa = ";
        cin>>nameStud[i];
        cout<<"Masukkan NIM Mahasiswa = ";
        cin>>nimStud[i];
        cout<<"Masukkan Nilai Anda = ";
        cin>>score[i];
        cout<<endl;

        if (score[i] > max)
        {
            max = score[i];
            hstCount = 1;
            hstInc[0] = i;
        }
        else if (score[i] == max)
        {
            hstInc[hstCount] = i;
            hstCount++;
        }

    }

    cout<<"***Daftar Nilai Dasar Pemrograman Kelas 1C***"<<endl;
    cout<<"***Teknik Komputer UPI Cibiru***"<<endl;
    cout<<endl;

    for(int a=1;a<=sumStud;a++)
    {
        cout<<"Nama     : "<<nameStud[a]<<endl;
        cout<<"NIM      : "<<nimStud[a]<<endl;
        cout<<"Nilai    : "<<score[a]<<endl;
        cout<<endl;

        average += score[a];
    }

    average /= sumStud;

    cout<<"***Nilai Rata-Rata Kelas : "<<average<<"***"<<endl;
    cout<<"***Nilai Tertinggi Diraih oleh : ***"<<endl;

    for (int i = 0; i < hstCount; i++)
    {
        cout << "Nama     : " << nameStud[hstInc[i]] << endl;
        cout << "NIM      : " << nimStud[hstInc[i]] << endl;
        cout << "Nilai    : " << max << endl;
        cout << endl;
    }
}
