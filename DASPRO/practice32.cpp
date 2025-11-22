#include <iostream>

using namespace std;

void hitungBMI(float weight, float height)
{
    float BMI;

    BMI = weight / (height * height);

    cout<<"BMI Anda : "<<BMI;
    cout<<endl;

    if(BMI < 17.0)
    {
        cout<<"Anda Kurus";
        cout<<endl;
    }
    else if(17.0 < BMI && BMI < 18.4)
    {
        cout<<"Anda Kurus";
        cout<<endl;
    }
    else if(18.5 < BMI && BMI < 25.0)
    {
        cout<<"Anda Normal";
        cout<<endl;
    }
    else if(25.1 < BMI && BMI < 27.0)
    {
        cout<<"Anda Gemuk";
        cout<<endl;
    }
    else if(BMI > 27.0)
    {
        cout<<"Anda Gemuk";
        cout<<endl;
    }
}

int main()
{
    float berat;
    float tinggi;

    cout<<"Masukkan Berat Badan anda (kg)    : ";
    cin>>berat;
    cout<<"Masukkan Tinggi Badan anda (m)    : ";
    cin>>tinggi;
    cout<<endl;

    hitungBMI(berat,tinggi);
}
