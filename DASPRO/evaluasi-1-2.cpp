#include <iostream>
#include <stdlib.h>
#include <ctime>

using namespace std;

void checker(long long int number)
{
    if (number % 2 == 0) {
        cout << " adalah genap." << endl;
    } else {
        cout << " adalah ganjil." << endl;
    }
}

int main()
{
    srand(time(0));

    const int baris = 12;

    for (int i=0; i < baris; ++i)
    {
        int numb;

        for (int j=0; j <= i; ++j)
        {
            numb = rand()% 9+1;
            cout << numb;
        }

        cout << " = ";

        checker(numb);
    }
}
