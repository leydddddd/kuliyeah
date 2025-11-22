package P5.RUNB;

public class staff {
    String nip; //tidak bisa diakses karena beda paket.
    public String nama; //tidak bisa diakses karena beda paket.
    private String jabatan; //tidak bisa diakses karena private, hanya bisa diakses di class nya sendiri.
    protected String pendidikan; //tidak bisa diakses oleh main karena beda file, bukan turunan, dan beda class.
}
