#include <iostream>

using namespace std;

struct data
{
    string penulis;
    string penerbit;
    int tahun;
    data *next;
};

data *snake = new data();
data *snake_head = new data();
data *snake_tail = new data();
data *snake_newhead = new data();
data *snake_body1 = new data();
data *snake_newtail = new data();
data *soul = new data();
data *bone = new data();

void input_snake(string pnls, string pnrbt, int thn) //node head
{
    snake_head->penulis = pnls;
    snake_head->penerbit = pnrbt;
    snake_head->tahun = thn;
    snake_head->next = NULL;
    snake_tail = snake_head;
}

void input_newhead(string pnls, string pnrbt, int thn) //tambah node head baru
{
    snake_newhead->penulis = pnls;
    snake_newhead->penerbit = pnrbt;
    snake_newhead->tahun = thn;
    snake_newhead->next = snake_head;
    snake_head = snake_newhead;
}

void input_body(string pnls, string pnrbt, int thn) //tambah node baru setelah snake_newhead
{
    snake_body1->penulis = pnls;
    snake_body1->penerbit = pnrbt;
    snake_body1->tahun = thn;
    snake_body1->next = snake_newhead->next;
    snake_newhead->next = snake_body1;
}

void input_tail(string pnls, string pnrbt, int thn) //tambah node akhir setelah snake_head dan point ke NULL
{
    snake_newtail->penulis = pnls;
    snake_newtail->penerbit = pnrbt;
    snake_newtail->tahun = thn;
    snake_newtail->next = NULL;

    if(snake_head == NULL)
    {
        snake_head = snake_newtail;
        return;
    }

    soul = snake_head;
    while(soul->next != NULL)
    {
        soul = soul->next;
    }

    soul->next = snake_newtail;
}

void modify_head(string new_pnls, string new_pnrbt, int new_thn)
{
    snake_newhead->penulis = new_pnls;
    snake_newhead->penerbit = new_pnrbt;
    snake_newhead->tahun = new_thn;
}

void modify_body(string new_pnls, string new_pnrbt, int new_thn)
{
    snake_body1->penulis = new_pnls;
    snake_body1->penerbit = new_pnrbt;
    snake_body1->tahun = new_thn;
}

void modify_tail(string new_pnls, string new_pnrbt, int new_thn)
{
    snake_newtail->penulis = new_pnls;
    snake_newtail->penerbit = new_pnrbt;
    snake_newtail->tahun = new_thn;
}

void delete_head()
{
    if (snake_newhead == NULL)
    {
        cout << "Linked list kosong, tidak ada yang bisa dihapus." << endl;
        return;
    }

    bone = snake_head;
    snake_head = snake_head->next;
    delete bone;
}

void delete_body()
{
    if (snake_newhead == NULL)
    {
        cout << "Linked list kosong, tidak ada yang bisa dihapus." << endl;
        return;
    }

    bone = snake_head;
    while(bone->next != snake_body1)
    {
        if(bone->next == NULL)
        {
            cout<<"Tiada Node Body.\n\n";
            return;
        }
        bone = bone->next;
    }

    bone->next = snake_body1->next;
    delete snake_body1;
}

void delete_tail()
{
    if (snake_newhead == NULL)
    {
        cout << "Linked list kosong, tidak ada yang bisa dihapus." << endl;
        return;
    }

    bone = snake_newhead;
    while(bone->next->next != NULL)
    {
        bone = bone->next;
    }

    delete bone->next;
    bone->next = NULL;
}

void display_snake()
{
    snake = snake_head;

    while(snake != NULL)
    {
        cout<<snake->penulis<<endl;
        cout<<snake->penerbit<<endl;
        cout<<snake->tahun<<endl;
        cout<<endl;
        snake = snake->next;
    }
}

//urutan node yang diharapkan :
//snake_newhead | Head => snake_body | Node 1 => snake_head | Node 2 => snake_newtail | NULL

int main()
{
    int code;
    int input;
    string pnlss;
    string pnrbtt;
    int thnn;

    cout<<"============Value Setiap Node============\n";
    input_snake("Diep Sanchez", "Logos.", 2002);
    input_newhead("Togarez Dios", "Ares.", 2022);
    input_body("Alfredo", "Yurs", 1933);
    input_tail("Mais Dias Unos", "Reihi La", 1231);
    display_snake();

    cout<<"Modifikasi Value / Hapus Node ? [1,2] : ";
    cin>>code;

    if(code == 1)
    {
        cout<<"Modifikasi Value ? [1,2,3] : ";
        cin>>input;
        cout<<endl;

        switch(input)
        {
        case 1:
            cout<<"============Linked List Node Head Di-Modifikasi============\n";
            cout<<"Masukkan Penulis     : ";
            getline(cin.ignore(), pnlss);
            cout<<"Masukkan Penerbit    : ";
            getline(cin, pnrbtt);
            cout<<"Masukkan Tahun       : ";
            cin>>thnn;
            modify_head(pnlss, pnrbtt, thnn);
            cout<<endl;
            cout<<"============Linked List Setelah Node Head Di-Modifikasi============\n";
            display_snake();
            break;
        case 2:
            cout<<"============Linked List Node Body Di-Modifikasi============\n";
            cout<<"Masukkan Penulis     : ";
            getline(cin.ignore(), pnlss);
            cout<<"Masukkan Penerbit    : ";
            getline(cin, pnrbtt);
            cout<<"Masukkan Tahun       : ";
            cin>>thnn;
            cin.ignore();
            modify_body(pnlss, pnrbtt, thnn);
            cout<<endl;
            cout<<"============Linked List Setelah Node Head Di-Modifikasi============\n";
            display_snake();
            break;
        case 3:
            cout<<"============Linked List Node Tail Di-Modifikasi============\n";
            cout<<"Masukkan Penulis     : ";
            getline(cin.ignore(), pnlss);
            cout<<"Masukkan Penerbit    : ";
            getline(cin, pnrbtt);
            cout<<"Masukkan Tahun       : ";
            cin>>thnn;
            cin.ignore();
            modify_tail(pnlss, pnrbtt, thnn);
            cout<<endl;
            cout<<"============Linked List Setelah Node Head Di-Modifikasi============\n";
            display_snake();
            break;
        }
    }

    else if(code == 2)
    {
        cout<<"Hapus Node ? [1,2,3] : ";
        cin>>input;
        cout<<endl;

        switch(input)
        {
        case 1:
            cout<<"============Linked List Setelah Node Head Dihapus============\n";
            delete_head();
            display_snake();
            break;
        case 2:
            cout<<"============Linked List Setelah Node Body Dihapus============\n";
            delete_body();
            display_snake();
            break;
        case 3:
            cout<<"============Linked List Setelah Node Tail Dihapus============\n";
            delete_tail();
            display_snake();
            break;
        }
    }
}
