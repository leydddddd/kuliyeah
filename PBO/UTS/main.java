abstract class BangunDatar {

    double HasilSegitiga;
    float HasilPersegi;

    public void hitungLuas()
    {}
}

class Segitiga extends BangunDatar {
    double alas;
    double tinggi;
    double TriRes;

    public Segitiga(double tile, double height)
    {
        this.alas = tile;
        this.tinggi = height;
        this.TriRes = (0.5) * tile * height;
        super.HasilSegitiga = this.TriRes;
    }

    @Override
    public void hitungLuas()
    {
        super.hitungLuas();
        System.out.println("Luas Segitiga : " + this.TriRes);
    }
}

class Persegi extends BangunDatar {
    float sisi;
    float BoxRes;

    public Persegi(float side)
    {
        this.sisi = side;
        this.BoxRes = side * side;
        super.HasilPersegi = this.BoxRes;
    }

    @Override
    public void hitungLuas()
    {
        super.hitungLuas();
        System.out.println("Luas Persegi : " + this.BoxRes);
    }

}

public class main {
    public static void main(String[] args) {
        Segitiga segres = new Segitiga(5, 10);
        Persegi kotres = new Persegi(5);

        segres.hitungLuas();
        kotres.hitungLuas();
    }
}