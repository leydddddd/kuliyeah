#include <iostream>

using namespace std;

const int isSize = 5;

struct queue
{
    int isFront;
    int isRear;
    int isQueue[isSize];
};

queue don;

int isEmpty()
{
    if (don.isFront == -1 && don.isRear == -1)
    {
        cout << "Queue kosong" << endl;
        return 1;
    }
    return 0;
}

int isFull()
{
    if ((don.isRear + 1) % isSize == don.isFront)
    {
        cout << "Queue penuh" << endl;
        return 1;
    }
    return 0;
}

void createQueue()
{
    don.isFront = -1;
    don.isRear = -1;
}

void pushData(int lol)
{
    if (isFull())
    {
        cout << "Queue penuh" << endl;
        return;
    }
    else if (isEmpty())
    {
        don.isFront = 0;
        don.isRear = 0;
    }
    else
    {
        don.isRear = (don.isRear + 1) % isSize;
    }

    don.isQueue[don.isRear] = lol;

    cout << "Angka " << lol << " masuk." << endl;
}

void delData()
{
    if (isEmpty())
    {
        cout << "Queue kosong." << endl;
        return;
    }
    cout << "Angka " << don.isQueue[don.isFront] << " keluar." << endl;

    if (don.isFront == don.isRear)
    {
        don.isFront = -1;
        don.isRear = -1;
    }
    else
    {
        don.isFront = (don.isFront + 1) % isSize;
    }
}

void displayQueue()
{
    if (isEmpty())
    {
        cout<<"Queue kosong."<<endl;
        return;
    }

    cout<<"Isi queue: ";
    int i = don.isFront;

    while (true)
    {
        cout<<don.isQueue[i]<<" ";
        if (i == don.isRear)
            break;
        i = (i + 1) % isSize;
    }
    cout<<endl;
}

void destroyQueue()
{
    if (isEmpty())
    {
        cout << "Queue sudah kosong." << endl;
        return;
    }

    while (!isEmpty())
    {
        cout << "Menghapus: " << don.isQueue[don.isFront] << endl;
        delData();
    }

    cout << "Semua elemen queue berhasil dihapus." << endl;
}

void findingQueue(int lol)
{
    if (isEmpty())
    {
        cout << "Queue kosong." << endl;
        return;
    }

    cout << "Mencari angka " << lol << " dalam queue..." << endl;
    int i = don.isFront;
    int position = 1;

    while (true)
    {
        if (don.isQueue[i] == lol)
        {
            cout << "Angka " << lol << " ditemukan pada posisi ke-" << position << "." << endl;
            return;
        }

        if (i == don.isRear)
            break;

        i = (i + 1) % isSize;
        position++;
    }

    cout << "Angka " << lol << " tidak ditemukan dalam queue." << endl;
}


int main()
{
    int lol;
    int lel;
    int diddy;

    createQueue();

    while(true)
    {
        cout<<"====Menu Queue====\n";
        cout<<"1. Insert Queue\n";
        cout<<"2. Delete Queue\n";
        cout<<"3. Destroy Queue\n";
        cout<<"4. Finding Number\n";
        cout<<"5. Tampilkan\n";
        cout<<"6. Keluar\n";
        cout<<"==================\n";
        cout<<don.isQueue[0]<<don.isQueue[1]<<don.isQueue[2]<<don.isQueue[3]<<don.isQueue[4]<<endl;
        cout<<"==================\n";
        cout<<"Pilihan : ";
        cin>>lol;

        switch(lol)
        {
        case 1:
            cout<<"Masukkan Angka   : ";
            cin>>lel;

            pushData(lel);
            break;
        case 2:
            delData();
            break;
        case 3:
            destroyQueue();
            break;
        case 4:
            cout<<"Masukkan Angka : ";
            cin>>diddy;
            findingQueue(diddy);
            break;
        case 5:
            displayQueue();
            break;
        case 6:
            return 0;
        default :
            cout<<"Pilihan Invalid, Coba Lagi\n";
        }
    }



    pushData(10);
    pushData(9);
    pushData(5);
    displayQueue();
    delData();
    displayQueue();
    return 0;
}
