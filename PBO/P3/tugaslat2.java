
import java.util.Scanner;

public class tugaslat2 {
    public static void main(String[] args) {
        
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan nilai a : ");
        int a = input.nextInt();
        System.out.print("Masukkan nilai b : ");
        int b = input.nextInt();

        int penjumlahan = a + b;
        int pengurangan = a - b;
        int perkalian = a * b;
        int pembagian = a / b;
        float dividend = (float) a / b; 
        int sisa = a % b;

        System.out.println("Hasil penjumlahan a + b = " + penjumlahan);
        System.out.println("Hasil pengurangan a - b = " + pengurangan);
        System.out.println("Hasil perkalian a * b = " + perkalian);
        System.out.println("Hasil pembagian a / b = " + pembagian);
        System.out.println("Hasil pembagian a / b = " + dividend);
        System.out.println("Hasil sisa a % b = " + sisa);
    }
}