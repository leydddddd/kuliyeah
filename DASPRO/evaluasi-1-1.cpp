#include <iostream>
#include <stdlib.h>
#include <ctime>

using namespace std;

struct Data
{
    int value;
    int *pointer;
};

int main()
{
    srand(time(0));
    Data dat[5];

    int max1 = 0;
    int max2 = 0;

    //int dat[5].(*pointer) = double niger;

    for(int i = 0; i < 5; i++)
    {
        int randomizer = rand() % 100 + 1;
        dat[i].value = randomizer;

        int randomizer2 = rand() % 101 + 100;
        int *pointRand2 = &randomizer2;
        dat[i].pointer = &randomizer2;

        cout<<"Data "<<i+1<<" : Value  = "<<dat[i].value<<" , *pointer = "<<*(dat[i].pointer)<<endl;

        if(randomizer > max1)
        {
            max1 = randomizer;
        }

        if(randomizer2 > max2)
        {
            max2 = randomizer2;
        }
    }
    cout<<"Nilai Maksimum Pointer   = "<<max2<<endl;;
    cout<<"Nilai Maksimum Value     = "<<max1<<endl;;
}
