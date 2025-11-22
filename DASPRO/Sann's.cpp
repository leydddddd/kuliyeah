#include <iostream>
#include <sstream>
#include <string>
#include <cmath>

using namespace std;

int main() {
    int Max_History_Size = 1000;
    string history[Max_History_Size][2];
    int historyCount = 0;

    cout<<"=========|Kalkulator Riwayat|========="<<endl;

    while (true) {
        cout<<"Masukkan Operasi Yang diinginkan (+, -, *, /, ^, sqrt) atau ketik 'riwayat'/'selesai' untuk mengakhiri program: "<<endl;
        cout<<"Contoh 4-2,sqrt(43)"<<endl;
        string input;
        getline(cin, input);

        if (input == "riwayat"||input == "selesai") {
            break;
        }

        if (historyCount < Max_History_Size) {
            double num1, num2;
            char op;

            stringstream ss(input);
            ss >> num1 >> op >> num2;

            double result;

            if (ss.fail()) { // Jika operasi bukan dari num1 op num2
                if (input.substr(0, 5) == "sqrt(" && input[input.size() - 1] == ')') {
                    stringstream numStream(input.substr(5, input.size() - 6));
                    numStream >> num1;
                    result = sqrt(num1);
                    history[historyCount][0] = input;
                    history[historyCount][1] = to_string(result);
                    historyCount++;
                    cout<<"Hasil operasi = "<<result<<endl;
                } else {
                    cout<<"Operasi Matematika Tidak Valid!"<<endl;
                    continue;
                }
            } else {
                switch (op) {
                    case '+':
                        result = num1 + num2;
                        break;
                    case '-':
                        result = num1 - num2;
                        break;
                    case '*':
                        result = num1 * num2;
                        break;
                    case '/':
                        if (num2 != 0) {
                            result = num1 / num2;
                        } else {
                            cout<<"Pembagian dengan nol tidak dapat dilakukan!"<<endl;
                            continue;
                        }
                        break;
                    case '^':
                        result = pow(num1, num2);
                        break;
                    default:
                        cout<<"Operator Matematika Tidak Valid!"<<endl;
                        continue;
                }

                history[historyCount][0] = input;
                history[historyCount][1] = to_string(result);
                historyCount++;

                cout<<"Hasil operasi = "<<result<<endl;
            }
        } else {
            cout<<"Riwayat Perhitungan Sudah Penuh, Tidak dapat menambah."<<endl;
            break;
        }
    }

    cout<<"\nRiwayat Operasi:"<<endl;
    for (int i = 0; i < historyCount; i++) {
        cout<<history[i][0]<<" = "<<history[i][1]<<endl;
    }

    return 0;
}
