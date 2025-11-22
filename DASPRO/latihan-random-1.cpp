#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;

int main()
{
    srand(time(0));
    int dadu1 = rand() % 6 + 1;
    int dadu2 = rand() % 6 + 1;

    cout<<"Andi melempar dadu pertama dan mendapat  : "<<dadu1<<endl;
    cout<<"Andi melempat dadu kedua dan mendapat    : "<<dadu2<<endl;
    cout<<"Total    : "<<dadu1 + dadu2<<endl;
    return 0;
}
