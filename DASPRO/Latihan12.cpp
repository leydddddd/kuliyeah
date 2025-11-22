#include <iostream>
#include <string>
#include <conio.h>

using namespace std;

int main()
{
    string word;
    int wordloc, total;

    cout<<"Masukkan Kalimat = ";
    getline(cin,word);

    total = word.length();

    while (total>0)
    {
        total--;

        if(word.find('a')>=0)
        {
            wordloc = word.find('a');
            word[total] = 'i';
        }
    }
    cout<<"Modifikasi = "<<word<<endl;
}
