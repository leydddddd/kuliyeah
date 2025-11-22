class Kendaraan {
    void bunyiKlakson() {
        System.out.println("Kendaraan berbunyi klakson.");
    }
}

class Mobil extends Kendaraan {
    @Override
    void bunyiKlakson() {
        System.out.println("Tiiinnn Tiiinnn");
    }
}

class Motor extends Kendaraan {
    @Override
    void bunyiKlakson() {
        System.out.println("Teet Teet");
    }
}

public class mein {
    public static void main(String[] args) {
        Kendaraan vehicle = new Kendaraan();
        Kendaraan mobilSound = new Mobil();
        Kendaraan motorSound = new Motor();

        vehicle.bunyiKlakson(); // Output: Kendaraan berbunyi klakson.
        mobilSound.bunyiKlakson(); // Output: Tiiinnn Tiiinnn
        motorSound.bunyiKlakson(); // Output: Teet Teet
    }
}