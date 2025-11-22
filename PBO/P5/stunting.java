package P5;
import P5.RUNB.staff;

class mahasiswa {
    String nama;
    public String nim;
    private String angkatan;
    protected String jurusan; 
}

 public class stunting {
    public static void main(String[] args) {
        mahasiswa mhs = new mahasiswa();
        mhs.nama = "Jatmiko";
        mhs.nim = "123456";
        //mhs.angkatan = "2077"; //tidak bisa dipanggil karena private, selain dari classnya sendiri.
        mhs.jurusan = "Ahli Kubur";

        dosen dsn = new dosen();
        dsn.nama = "Tulus";
        dsn.nip = "123456";
        //dsn.bidangIlmu = "Ilmu Kematian"; //tidak bisa dipanggil karena private, hanya bisa dipanggil di class nya sendiri.
        dsn.gelar = "S3";

        staff stf = new staff(); //tidak bisa membuat objek karena beda paket dan juga beda file.
        stf.nama = "Negro"; 
        //stf.nip = "123456";
        //stf.jabatan = "Master Mayat";
        //stf.pendidikan = "SMA";

        System.out.println(mhs.nama);
        System.out.println(mhs.nim);
        //System.out.println(mhs.angkatan); //tidak bisa dipanggil karena private, selain dari kelasnya sendiri.
        System.out.println(mhs.jurusan);
        
        System.out.println(" ");

        System.out.println(dsn.nip);
        System.out.println(dsn.nama);
        //System.out.println(dsn.bidangIlmu); //tidak bisa dipanggil karena private, selain dari kelasnya sendiri.
        System.out.println(dsn.gelar);
        
        System.out.println(" ");

        System.out.println(stf.nama);
        //System.out.println(stf.nip); //tidak bisa karena beda paket
        //System.out.println(stf.jabatan); //tidak bisa dipanggil karena private, selain dari kelasnya sendiri. 
        //System.out.println(stf.pendidikan); //tidak bisa karena beda paket kecuali turunnanya.
    }
}