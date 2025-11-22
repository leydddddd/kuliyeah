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
data *snake_body = new data();
data *snake_body1 = new data();
data *snake_tail = new data();
data *bone = new data();

void input_snake(string pnls, string pnrbt, int thn)
{
    snake_head->penulis = pnls;
    snake_head->penerbit = pnrbt;
    snake_head->tahun = thn;
    snake_head->next = snake_body;
}

void input_body(string pnls, string pnrbt, int thn)
{
    snake_body->penulis = pnls;
    snake_body->penerbit = pnrbt;
    snake_body->tahun = thn;
    snake_body->next = snake_body1;
}

void input_tail(string pnls, string pnrbt, int thn)
{
    snake_body1->penulis = pnls;
    snake_body1->penerbit = pnrbt;
    snake_body1->tahun = thn;
    snake_body1->next = NULL;
    snake_tail = snake_body1;
}

void delete_head()
{
    if (snake_head == NULL)
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
    if (snake_head == NULL)
    {
        cout << "Linked list kosong, tidak ada yang bisa dihapus." << endl;
        return;
    }

    bone = snake_head;
    while(bone->next != snake_body1)
    {
        bone = bone->next;
    }

    delete snake_body;
    snake_head->next = bone->next;
}

void delete_tail()
{
    if (snake_head == NULL)
    {
        cout << "Linked list kosong, tidak ada yang bisa dihapus." << endl;
        return;
    }

    bone = snake_head;
    while(bone->next != snake_body1)
    {
        bone = bone->next;
    }

    delete snake_body1;
    snake_tail = bone;
    snake_tail->next = NULL;
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

int main()
{
    int input;

    cout<<"============Linked List Sebelum Penghapusan Node============\n";
    input_snake("Diep Sanchez", "Logos.", 2002);
    input_body("Togarez Dios", "Mitarais.", 2022);
    input_tail("Alfredo", "Yur", 1933);
    display_snake();

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
