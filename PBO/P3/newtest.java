
import java.util.Scanner;


public class newtest
{
    public static void main(String args[])
    {
        String nama, alamat, prostud, universitas, nim, tahunMasuk;

        Scanner input = new Scanner(
            System.in
        );

        System.out.print("Masukkan Nama Anda: ");
        nama = input.nextLine();
        System.out.print("Masukkan NIM Anda: ");
        nim = input.nextLine();
        System.out.print("Masukkan Alamat Anda: ");
        alamat = input.nextLine();
        System.out.print("Masukkan Program Studi Anda: ");
        prostud = input.nextLine();
        System.out.print("Masukkan Universitas Anda: ");
        universitas = input.nextLine();
        System.out.print("Masukkan Tahun Masuk Anda: ");
        tahunMasuk = input.nextLine();

        System.out.print(nama + " adalah mahasiswa " + universitas + " Program Studi " + prostud + 
        " angkatan " + tahunMasuk + " dengan NIM " + nim + " dan bertempat tinggal di " + alamat + ".\n");
    }
}