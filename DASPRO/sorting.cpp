#include <iostream>

using namespace std;

int main()
{
    int hitam[5] = {10,9,2,1};

    for(int i = 4; i >= 1; i--)
    {
        int j = 0;

        do
        {
            if (hitam[j] > hitam[j+1])
            {
                int temp = hitam[j];
                hitam[j] = hitam[j+1];
                hitam[j+1] = temp;
            }
            j = j + 1;
        }while(j < i);
    }

    for(int k = 0; k < 5; k++)
    {
        cout<<hitam[k]<<" ";
    }
}
