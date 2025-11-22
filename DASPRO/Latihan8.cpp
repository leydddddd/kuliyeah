#include <iostream>
#include <conio.h>

using namespace std;

int main()
{
    string kata = "Bandung";
    for(int a=0;a<kata.length();a++)
    {
    for(int b=a;b<kata.length();b++)
        cout<<kata[a];
        cout<<endl;
    }
getch();
}
