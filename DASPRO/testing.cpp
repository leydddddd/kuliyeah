#include <iostream>

using namespace std;

int main() {
    int pilihan;
    double sudut, hasil;

    cout << "Kalkulator Trigonometri (Tanpa Library Eksternal)" << endl;
    cout << "Pilih operasi:" << endl;
    cout << "1. Menghitung sinus" << endl;
    cout << "2. Menghitung kosinus" << endl;
    cout << "3. Menghitung tangen" << endl;
    cout << "Masukkan pilihan (1/2/3): ";
    cin >> pilihan;

    if (pilihan < 1 || pilihan > 3) {
        cout << "Pilihan tidak valid." << endl;
        return 1; // Keluar dari program dengan kode kesalahan
    }

    cout << "Masukkan sudut dalam derajat: ";
    cin >> sudut;

    // Mengonversi sudut ke radian karena fungsi trigonometri umumnya menggunakan radian
    double sudutRadian = sudut * 3.14159265 / 180.0;

    // Menghitung trigonometri berdasarkan pilihan
    if (pilihan == 1) {
        hasil = 0;
        double eksponen = sudutRadian;
        for (int n = 1; n <= 10; n += 2) {
            hasil += eksponen;
            eksponen *= -(sudutRadian * sudutRadian) / ((n + 1) * (n + 2));
        }
        cout << "Sin(" << sudut << " derajat) = " << hasil << endl;
    } else if (pilihan == 2) {
        hasil = 0;
        double eksponen = 1;
        for (int n = 0; n <= 10; n += 2) {
            hasil += eksponen;
            eksponen *= -(sudutRadian * sudutRadian) / ((n + 1) * (n + 2));
        }
        cout << "Cos(" << sudut << " derajat) = " << hasil << endl;
    } else if (pilihan == 3) {
        hasil = sin(sudutRadian) / cos(sudutRadian);
        cout << "Tan(" << sudut << " derajat) = " << hasil << endl;
    }

    return 0;
}
