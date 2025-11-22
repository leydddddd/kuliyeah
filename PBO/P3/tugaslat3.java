
import java.util.Scanner;

public class tugaslat3 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        float jam, menit, detik;

        detik = 60;
        menit = 60;

        System.out.print("Masukkan jam : ");
        jam = input.nextFloat();
        System.out.print("Masukkan menit : ");
        menit = input.nextFloat();
        System.out.print("Masukkan detik : ");
        detik = input.nextFloat();

        System.out.println("Konversi waktu ke detik : " + (jam * 3600 + menit * 60 + detik));
    }
}
