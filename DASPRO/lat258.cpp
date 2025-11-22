#include <conio.h>
#include <iostream>
#include <stdio.h>

using namespace std;

int walah();

main()
{
    int k = 5;

    walah();
    walah();
    cout<<"\nNilai K didalam fungsi main() = "<<k;
    getch();
}

walah()
{
    static int k;
    k += 4;
    cout<<"\nNilai K didalam fungsi() = "<<k;
}
