//Nama  : Akbar Dwi Herlambang
//NIM   : 2308979
//Kelas : 3A

#include <iostream>

using namespace std;

const int ukuran = 5;

struct stako
{
    int top;
    int tmp[ukuran];
};

stako uno;

void create_stack()
{
    uno.top = -1;
}

int empty_check()
{
    if(uno.top == -1)
    {
        cout<<"stack kosong\n";
        return 1;
    }

    else
    {
        cout<<"stack tidak kosong\n";
        return 0;
    }
}

int full_check()
{
    if (uno.top == ukuran - 1)
    {
        cout<<"stack penuh\n";
        return 1;
    }
    else
    {
        cout<<"stack tidak penuh\n";
        return 0;
    }
}

void push(int lel)
{
    if(full_check() == 0)
    {
        uno.top++;
        uno.tmp[uno.top] = lel;
        cout<<"Berhasil memasukkan "<<lel<<" kedalam stack\n";
        cout<<endl;
    }
    else
    {
        cout<<"stack penuh\n";
    }
}

void pop()
{
    if(empty_check() == 0)
    {
        uno.top--;
    }
    else
    {
        cout<<"stack kosong\n";
    }
}

void display()
{
    if (empty_check() == 0)
    {
        cout<<"Isi stack saat ini: ";
        for (int i = 0; i <= uno.top; i++)
        {
            cout<<endl;
            cout<<uno.tmp[i]<<" ";
        }
        cout<<endl;
        cout<<"\nElemen paling atas: "<<uno.tmp[uno.top]<<endl;
        cout<<endl;
    }
    else
    {
        cout<<"stack kosong.\n"<<endl;
    }
}

int peek(int lol)
{
    cout<<"Elemen pada posisi "<<lol<<" adalah  : "<<uno.tmp[lol-1]<<endl;
    cout<<endl;
}

int count_data()
{
    cout<<"Jumlah Data Saat Ini : "<<uno.top<<endl;
    cout<<endl;
}

void change_data(int pos, int lol)
{
    uno.tmp[pos-1] = lol;
    cout<<"Elemen pada posisi "<<pos<<" telah diubah menjadi    : "<<uno.tmp[pos]<<endl;
    cout<<endl;
}

void destroy_stack()
{
    while(uno.top != -1)
    {
        uno.top--;
    }

    cout<<endl;
}

int main()
{
    int selection;
    int numb;
    int changer;

    while(true)
    {
        cout<<"========Stack========"<<endl;
        cout<<"1. Create Stack     "<<endl;
        cout<<"2. Empty Check      "<<endl;
        cout<<"3. Full Check       "<<endl;
        cout<<"4. Isi Stack        "<<endl;
        cout<<"5. Hapus Stack      "<<endl;
        cout<<"6. Display Stack    "<<endl;
        cout<<"7. Peek Stack       "<<endl;
        cout<<"8. Change Stack     "<<endl;
        cout<<"9. Destroy Stack    "<<endl;
        cout<<"10. Exit            "<<endl;
        cout<<"Note : Default ukuran stack sama dengan 5"<<endl;
        cout<<"Note : Create Stack otomatis declare 'top' menjadi (-1)"<<endl;
        cout<<"Pilihan  : ";
        cin>>selection;
        cout<<"========Stack========"<<endl;
        cout<<endl;

        switch(selection)
        {
            case 1:
                create_stack();
                break;
            case 2:
                empty_check();
                break;
            case 3:
                full_check();
                break;
            case 4:
                cout<<"Masukkan angka yang akan dimasukkan ke stack : ";
                cin>>numb;
                push(numb);
                break;
            case 5:
                pop();
                break;
            case 6:
                display();
                break;
            case 7:
                cout<<"Masukkan posisi elemen yang akan di lihat   : ";
                cin>>numb;
                peek(numb);
                break;
            case 8:
                cout<<"Masukkan posisi elemen yang akan di ganti   : ";
                cin>>numb;
                cout<<"Masukkan angka yang akan di gantikan        : ";
                cin>>changer;
                change_data(numb, changer);
                break;
            case 9:
                destroy_stack();
                break;
            case 10:
                return 0;
            default:
                cout<<"Pilihan tidak valid. Coba lagi.\n";
        }
    }
}
