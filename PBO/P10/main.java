abstract class Kendaraan {
    public String merk;
    public int tahunProduksi;

    public abstract void nyalakanMesin();

    public void infoKendaraan() {
        System.out.println("Merk: " + merk);
        System.out.println("Tahun Produksi: " + tahunProduksi);
    }
}

class Mobil extends Kendaraan {
    public int jumlahPintu;

    @Override
    public void nyalakanMesin() {
        System.out.println("Mesin mobil dinyalakan...");
        System.out.println("Mesin mobil dimatikan...");
    }

    @Override
    public void infoKendaraan() {
        super.infoKendaraan();
        System.out.println("Jumlah Pintu: " + jumlahPintu);
    }
}

class Motor extends Kendaraan {
    public String jenisMotor;

    @Override
    public void nyalakanMesin() {
        System.out.println("Mesin motor dinyalakan...");
        System.out.println("Mesin motor dimatikan...");
    }

    @Override
    public void infoKendaraan() {
        super.infoKendaraan();
        System.out.println("Jenis Motor: " + jenisMotor);
    }
}

public class main {
    public static void main(String[] args) {
        Mobil mobil = new Mobil();
        System.out.print("Mobil ");
        mobil.merk = "Toyota";
        mobil.tahunProduksi = 2020;
        mobil.jumlahPintu = 4;
        mobil.infoKendaraan();
        mobil.nyalakanMesin();

        System.out.println();

        Motor motor = new Motor();
        System.out.print("Motor ");
        motor.merk = "Honda";
        motor.tahunProduksi = 2019;
        motor.jenisMotor = "Sport";
        motor.infoKendaraan();
        motor.nyalakanMesin();
    }
}