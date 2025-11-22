#include <iostream>
#include <cstdlib>
#include <ctime>
#include <cstring>

using namespace std;

const int rate_konversi = 10;
const int sum_sym = 3;
const char simbolss[sum_sym] = {'L', 'W', '7'};

struct Wallet
{
    int coins;
    double dollars;
};

void deposit(Wallet *wallet);
void withdraw(Wallet *wallet);
void dompet(Wallet *wallet);
void mesin_slot(Wallet *wallet);
void rules();
void round(char *reels, int length);
int bonus(char *reels, int length);

int main()
{
    srand(time(0));
    Wallet wallet;
    wallet.coins = 0;
    wallet.dollars = 0;
    bool exit = false;
    int pilihan;

    while (!exit)
    {
        cout << "===== Selamat Datang  =====" << endl;
        cout << "1. Deposit" << endl;
        cout << "2. Withdraw" << endl;
        cout << "3. Wallet" << endl;
        cout << "4. Mesin Slot" << endl;
        cout << "5. Aturan Bermain" << endl;
        cout << "6. Exit" << endl;
        cout << "Pilih menu     : ";
        cin >> pilihan;
        cout << endl;

        switch (pilihan)
        {
            case 1:
                deposit(&wallet);
                break;
            case 2:
                withdraw(&wallet);
                break;
            case 3:
                dompet(&wallet);
                break;
            case 4:
                mesin_slot(&wallet);
                break;
            case 5:
                rules();
                break;
            case 6:
                exit = true;
                break;
            default:
                cout << "Pilihan tidak diketahui, tolong coba lagi." << endl;
        }
    }
    return 0;
}

void deposit(Wallet *wallet)
{
    double dollars;
    char pilihan;

    do
    {
        cout << "Masukkan jumlah deposit ($) : ";
        cin >> dollars;

        // Tambahkan jumlah dolar yang di-deposit ke saldo dolar
        wallet->dollars += dollars;

        // Konversi semua dolar menjadi koin
        wallet->coins += (int)(wallet->dollars / rate_konversi);


        cout << "Anda telah mengkonversi " << wallet->dollars << " dollar ke " << wallet->coins << " koin." << endl;

        wallet->dollars -= wallet->dollars;

        cout << "Jumlah koin sekarang   : " << wallet->coins << ", Saldo dollar anda   : " << wallet->dollars << endl;
        cout << endl;

        cout << "Apakah Anda ingin deposit lagi? (y/n) : ";
        cin >> pilihan;
        cout << endl;
    } while (pilihan == 'y' || pilihan == 'Y');
}


void withdraw(Wallet *wallet)
{
    // Konversi semua koin menjadi dolar
    wallet->dollars = wallet->coins * rate_konversi;

    cout << "Anda telah mengkonversi " << wallet->coins << " koin menjadi " << wallet->dollars << " dollars." << endl;

    wallet->coins -= wallet->coins;

    cout << "Koin anda sekarang adalah : " << wallet->coins << ", Saldo dollar anda  : " << wallet->dollars << endl;
    cout << endl;
}

void dompet(Wallet *wallet)
{
    cout<<"---Saldo saat ini adalah--- "<<endl;
    cout<<"Koin     : "<<wallet->coins<<endl;
    cout<<"Dollar   : "<<wallet->dollars<<endl;
    cout<<endl;
}

void mesin_slot(Wallet *wallet)
{
    double bet, rounds;
    cout << "Masukkan jumlah bet per ronde  : ";
    cin >> bet;

    if (bet > wallet->coins)
    {
        cout << "Koin tidak cukup." << endl;
        return;
    }

    cout << "Masukkan jumlah ronde bermain per bet  : ";
    cin >> rounds;

    if (rounds * bet > wallet->coins)
    {
        cout << "Kekurangan koin untuk ronde tersebut, silahkan tambah koin atau kurangi ronde." << endl;
        return;
    }

    for (int i = 0; i < rounds; ++i)
    {
        char reels[3];
        round(reels, 3);

        double multi = bonus(reels, 3);
        double winnings = bet * multi;

        wallet->coins += winnings - bet;

        cout<<"Ronde "<<(i + 1)<<": "<<reels[0]<<" "<<reels[1]<<" "<<reels[2]<<" | Multiplier: "<<multi<<" | Menang: "<<winnings<<" coins"<<endl;
        cout<<endl;
    }

    cout << "Koin anda sekarang adalah : " << wallet->coins << endl;
}

void rules()
{
    cout << "===== Aturan Slot Gacor =====" << endl;
    cout << "Tiga simbol 'L'          : 2x multiplier" << endl;
    cout << "Tiga simbol 'W'          : 5x multiplier" << endl;
    cout << "Tiga simbol '7'          : 10x multiplier (Jackpot)" << endl;
    cout << "Dua simbol 'W' and 'L'   : Bet awal dikembalikan" << endl;
    cout << "Dua simbol 'W' and '7'   : Bet awal dikembalikan + bonus 100%" << endl;
    cout << "Tiga simbol yang berbeda : Kalah bet." << endl;
    cout << endl;
}

void round(char *reels, int length)
{
    for (int i = 0; i < length; ++i)
    {
        int index = rand() % sum_sym;
        reels[i] = simbolss[index];
    }
}

int bonus(char *reels, int length)
{
    // Jika semua tiga simbol sama
    if (reels[0] == reels[1] && reels[1] == reels[2])
    {
        if (reels[0] == 'L') return 2;
        if (reels[0] == 'W') return 5;
        if (reels[0] == '7') return 10;
    }
    else if ((reels[0] == 'W' && reels[1] == 'L' && reels[2] == 'W') ||
                 (reels[0] == 'W' && reels[1] == 'W' && reels[2] == 'L') ||
                 (reels[0] == 'L' && reels[1] == 'W' && reels[2] == 'W'))
    {
            return 1; //
    }
    else if ((reels[0] == 'W' && reels[1] == 'W' && reels[2] == '7') ||
                 (reels[0] == 'W' && reels[1] == '7' && reels[2] == 'W') ||
                 (reels[0] == '7' && reels[1] == 'W' && reels[2] == 'W'))
    {
            return 3; //
    }
    else
    {
        return 0;
    }
}
