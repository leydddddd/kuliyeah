#include <iostream>

using namespace std;

void sorter(int matrixes[8][8], int lehh)
{
    int array[64];
    int index = 0;

    for(int i = 0; i < 8; i++)
    {
        for(int j = 0; j < 8; j++)
        {
            array[index++] = matrixes[i][j];
        }
    }

    for(int i = 0; i < 64 - 1; i++)
    {
        for(int j = 0; j < 64 - i - 1; j++)
        {
            if(array[j] < array[j + 1])
            {
                int temp = array[j];
                array[j] = array[j + 1];
                array[j + 1] = temp;
            }
        }
    }

    index = 0;
    for(int i = 0; i < 8; i++)
    {
        for(int j = 0; j < 8; j++)
        {
            matrixes[i][j] = array[index++];
        }
    }

    cout<< "================================" << endl;
    for(int i = 0; i < 8; i++)
    {
        for(int j = 0; j < 8; j++)
        {
            cout<<" "<<matrixes[i][j]<<" ";
        }
        cout<<endl;
    }
}

void even_odd(int matrixes[8][8])
{
    int odd[64] = {0};
    int even[64] = {0};
    int odddex = 0;
    int evendex = 0;

    for (int k = 0; k < 8; k++)
    {
        for (int l = 0; l < 8; l++)
            {
            int temporary = matrixes[k][l];

            if (temporary % 2 == 0)
            {
                even[evendex++] = temporary;
            }
            else
            {
                odd[odddex++] = temporary;
            }
        }
    }

    for (int i = 0; i < odddex - 1; i++)
    {
        for (int j = 0; j < odddex - i - 1; j++)
        {
            if (odd[j] > odd[j + 1])
            {
                int temp = odd[j];
                odd[j] = odd[j + 1];
                odd[j + 1] = temp;
            }
        }
    }

    for (int i = 0; i < evendex - 1; i++)
        {
        for (int j = 0; j < evendex - i - 1; j++)
        {
            if (even[j] > even[j + 1])
            {
                int temp = even[j];
                even[j] = even[j + 1];
                even[j + 1] = temp;
            }
        }
    }

    cout<<"====================================="<<endl;
    cout<<"Angka ganjil: ";
    for (int i = 0; i < odddex; i++)
    {
        cout<<odd[i]<<" ";
    }
    cout<<endl;

    cout<<"Angka genap: ";
    for (int i = 0; i< evendex; i++)
    {
        cout <<even[i]<<" ";
    }
    cout<<endl;
}

int main()
{
    int matrixes[8][8] = {
    {
        3,2,3,5,5,2,4,4
    },
    {
        2,12,1,6,22,4,4,55
    },
    {
        3,23,2,55,33,123,12,66
    },
    {
        4,56,33,7,55,32,15,77
    },
    {
        5,7,1,88,23,25,15,8
    },
    {
        10,8,2,9,14,6,23,23
    },
    {
        12,9,4,88,57,3,45,14
    },
    {
        33,80,5,9,2,4,56,1
    },
    };

    cout<<"================================"<<endl;
    for(int i = 0; i < 8; i++)
    {
        for(int j = 0; j < 8; j++)
        {
            cout<<" "<<matrixes[i][j]<<" ";
        }
        cout<<endl;
    }

    sorter(matrixes, hell);
    even_odd(matrixes);
}
