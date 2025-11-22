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
        return 1;
    }

    else
    {
        return 0;
    }
}

int full_check()
{
    if (uno.top == ukuran - 1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

void push(int lel)
{
    if(full_check() == 0)
    {
        uno.top++;
        uno.tmp[uno.top] = lel;
    }
    else
    {
        cout<<"stack penuh\n";
    }
}

void pop()
{
    if(!empty_check())
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
            cout << uno.tmp[i] << " ";
        }
        cout<<"\nElemen paling atas: "<<uno.tmp[uno.top]<< endl;
        cout<<endl;
    }
    else
    {
        cout<<"stack kosong.\n";
    }
}

int main()
{
    create_stack();
    empty_check();
    full_check();

    push(10);
    push(20);
    push(92);
    push(12);
    push(25);

    display();

    pop();
    pop();

    display();
}
