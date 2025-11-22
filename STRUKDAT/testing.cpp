#include <iostream>

using namespace std;

void bubbles(int matrix[8][8])
{
    for(int k = 8; k >= 1; k--)
    {
        for(int l = 0; l < 7; l++)
        {
                int n = 0;

                do
                {
                    if (matrix[n][l] > matrix[n][l+1])
                    {
                        int temp = matrix[n][l];
                        matrix[n][l] = matrix[n][l+1];
                        matrix[n][l+1] = temp;
                    }

                    n = n + 1;
                }while(n < 8);
        }
    }

    cout<<"Setelah di sorting"<<endl;
    for(int i = 0; i < 8; i++)
    {
        for(int j = 7; j >= 0; j--)
        {
            cout<<" "<<matrix[i][j]<<" ";
        }
        cout<<endl;
    }
    cout<<endl;
}

void oddeven(int matrix[8][8])
{
    int newspace[];
    int newbox[];

    for(int k = 0; k < 8; k++)
    {
        for(int l = 0; l < 8; l++)
        {
            int temporary = matrix[k][l];

            if (temporary % 2 == 0)
            {
                newspace[] = matrix[k][l];
                //genap
            }
            else
            {
                //ganjil
                newbox[k][l] = matrix[k][l];
            }
        }
    };

    cout<<"Genap"<<endl;
    for (int i = 0; i < 8; i++)
    {
        for (int j = 0; j < 8; j++)
        {
            cout<<" "<<newspace[i][j]<<" ";
        }
        cout<<endl;
    }

    cout<<endl;

    cout<<"Ganjil"<< endl;
    for (int i = 0; i < 8; i++)
    {
        for (int j = 0; j < 8; j++)
        {
            cout<<" "<<newbox[i][j]<<" ";
        }
        cout<<endl;
    }
}

int main()
{
    int matrix[8][8] = {
                            {3, 2, 3, 5, 5, 2, 4, 4},
                            {2, 12, 1, 6, 22, 4, 4, 55},
                            {3, 23, 2, 55, 33, 123, 12, 66},
                            {4, 56, 33, 7, 55, 32, 15, 77},
                            {5, 7, 1, 88, 23, 25, 15, 8},
                            {10, 8, 2, 9, 14, 6, 23, 23},
                            {12, 9, 4, 88, 57, 3, 45, 14},
                            {33, 80, 5, 9, 2, 4, 56, 1},
                        };

    cout<<"Sebelum di sorting"<<endl;
    for(int i = 0; i < 8; i++)
    {
        for(int j = 0; j < 8; j++)
        {
            cout<<" "<<matrix[i][j]<<" ";
        }
        cout<<endl;
    }
    cout<<endl;

    //prosedur sorting
    bubbles(matrix);

    //ganjil genap?
    //oddeven(matrix);
}
