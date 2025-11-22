#include <iostream>

using namespace std;

void reverse_word(string word)
{
    int size = word.length();
    char box[size];

    for(int i = 0; i < size; i++)
    {
        box[i] = word[i];
    }

    cout<<"Pembalikkan Kata : ";
    for(int i = size - 1; i >= 0; i--)
    {
        cout<<box[i];
    }

    cout<<endl;
}

int main()
{
    string kata;

    cout<<"Masukkan Kata    : ";
    getline(cin,kata);

    reverse_word(kata);
}
