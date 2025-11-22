#include <iostream>
using namespace std;

main()
{
  char kode;

  cout<<"Masukkan kode barang [A..C] : ";cin>>kode;
  switch(kode)
  {
  case 'A' :
    cout<<"ALat Olah Raga";break;
  case 'B' :
    cout<<"Alat Elektronik";break;
  case 'C' :
    cout<<"Alat Masak";break;

  default :
    cout<<"Anda Salah Memasukkan Kode\n";
  }
}
