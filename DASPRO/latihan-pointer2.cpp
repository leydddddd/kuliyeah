#include <iostream>

using namespace std;

void bmi(double *height, double *weight)
{
    double b_m_index = *weight / ((*height) * (*height));
    cout<<b_m_index;
}

int main()
{
    double w, h;

    cout<<"Masukkan berat badan anda (kg) = ";
    cin>>w;

    cout<<"Masukkan tinggi badan anda (m) = ";
    cin>>h;

    cout<<"BMI Anda adalah = ";
    bmi(&h, &w);
}
