package LATIHAN4;

public class mobil {
    String merek;
    String warna;
    String kapasitas;

    mobil(String a, String b, String c)
    {
        merek = a;
        warna = b;
        kapasitas = c;
        
        System.out.println("Merek Mobil: " + merek);
        System.out.println("Warna Mobil: " + warna);
        System.out.println("Kapasitas Mobil: " + kapasitas);
        System.out.println("\n");
    }
}
