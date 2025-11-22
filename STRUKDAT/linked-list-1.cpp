#include <iostream>

using namespace std;

struct data
{
    string penulis;
    string penerbit;
    int tahun;
    data *next;
};

int main()
{
    data *kohl = new data();
    data *kohl1 = new data();
    data *kohl2 = new data();

    cout<<"Masukkan Nama Penulis untuk Data 1   : ";
    getline(cin,kohl->penulis);
    cout<<"Masukkan Nama Penerbit untuk Data 1  : ";
    getline(cin,kohl->penerbit);
    cout<<"Masukkan Tahun Terbit untuk Data 1   : ";
    cin>>kohl->tahun;
    cin.ignore();
    cout<<endl;
    kohl->next = kohl1;

    cout<<"Masukkan Nama Penulis untuk Data 2   : ";
    getline(cin,kohl1->penulis);
    cout<<"Masukkan Nama Penerbit untuk Data 2  : ";
    getline(cin,kohl1->penerbit);
    cout<<"Masukkan Tahun Terbit untuk Data 2   : ";
    cin>>kohl1->tahun;
    cin.ignore();
    cout<<endl;
    kohl1->next = kohl2;

    cout<<"Masukkan Nama Penulis untuk Data 3   : ";
    getline(cin,kohl2->penulis);
    cout<<"Masukkan Nama Penerbit untuk Data 3  : ";
    getline(cin,kohl2->penerbit);
    cout<<"Masukkan Tahun Terbit untuk Data 3   : ";
    cin>>kohl2->tahun;
    cin.ignore();
    cout<<endl;
    kohl2->next = NULL;

    data *dowhile = kohl;

    while(dowhile != NULL)
    {
        cout<<dowhile->penulis<<endl;
        cout<<dowhile->penerbit<<endl;
        cout<<dowhile->tahun<<endl;
        cout<<endl;
        dowhile = dowhile->next;
    }
}
