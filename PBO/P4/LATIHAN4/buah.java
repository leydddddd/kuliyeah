package LATIHAN4;
import LATIHAN5P4.pesawat;

public class buah {
    String nama;
    String warna;
    String berat;

    buah(String a, String b, String c)
    {
        nama = a;
        warna = b;
        berat = c;
        
        System.out.println("Nama Buah: " + nama);
        System.out.println("Warna Buah: " + warna);
        System.out.println("Berat Buah: " + berat);
        System.out.println("\n");
    }

    public static void main(String[] args) {

        
        buah buah1 = new buah("Anggur", "Ungu", "100 gram");
        buah buah2 = new buah("Jeruk", "Orange", "200 gram");
        buah buah3 = new buah("Mangga", "Hijau", "300 gram");

        mobil mobil1 = new mobil("Avanza", "Silver", "7 orang");
        mobil mobil2 = new mobil("Xenia", "Black", "7 orang");
        mobil mobil3 = new mobil("Jazz", "White", "5 orang");

        pesawat test = new pesawat("Air Asia", "Putih", "Airbus A320");
        pesawat test = new pesawat("Garuda", "Merah", "Boeing 737");
        pesawat test = new pesawat("Lion Air", "Hitam", "ATR 72");
    }
}
