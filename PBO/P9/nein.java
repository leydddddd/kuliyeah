class Kalkulator {
    public int tambah(int a, int b) {
        return a + b;
    }
    public double tambah(double a, double b) {
        return a + b;
    }
    public int tambah(int a, int b, int c) {
        return a + b + c;
    }
}

public class nein {
    public static void main(String[] args) {
        Kalkulator plusplus = new Kalkulator();
        
        System.out.println(plusplus.tambah(4, 4));
        System.out.println(plusplus.tambah(4.5, 4.5));
        System.out.println(plusplus.tambah(5, 3, 2));
    }
}
