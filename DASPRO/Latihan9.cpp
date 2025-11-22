#include <iostream>
#include <conio.h>
using namespace std;
int main()
{
   int total=0;
   for(int ganjil=1;ganjil<=20;ganjil += 2)
   {
            cout<<ganjil;
            if(ganjil<19)
            {
                cout<<" + ";
            }
            total += ganjil;
   }
   cout<<" = "<<total;
   getch();
}
