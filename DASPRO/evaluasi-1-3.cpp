#include <iostream>
#include <stdlib.h>

using namespace std;

struct rev
{
    string a;
    string b;
};

void nigga(string *mixA, string *mixB)
{
    string temp;
    temp = *mixA;
    *mixA = *mixB;
    *mixB = temp;

    cout<<"Text A   = "<<*mixA<<endl;
    cout<<"Text B   = "<<*mixB<<endl;
}

int main()
{
    rev tukar;

    cout<<"Masukkan Text A  : ";
    cin>>tukar.a;

    cout<<"Masukkan Text B  : ";
    cin>>tukar.b;
    cout<<endl;

    nigga(&tukar.a, &tukar.b);
}
