#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;

int main()
{
    srand(time(0));
    string soal[5];
    int input;
    int jumlah_quest = 5;

    for(int k = 0; k < 5; k++)
    {
        cout<<"Masukkan Soal Pertanyaan     : ";
        getline(cin,soal[k]);
        cout<<endl;
    }

    for(int i = 0; i < 5; i++)
    {
        int randomize = rand() % jumlah_quest;
        cout<<"Perlihatkan Soal ke ? [1-5] = ";
        cin>>input;
        cout<<"Soal no "<<input<<" adalah "<<soal[randomize]<<endl;
        cout<<endl;

        for (int j = randomize; j < jumlah_quest - 1; j++)
        {
            soal[j] = soal[j + 1];
        }
        jumlah_quest--;
    }
}
