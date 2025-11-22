class buah 
{
    String warna;
    String rasa;

    public buah(String warna, String rasa) 
    {
        this.warna = warna;
        this.rasa = rasa;
    }

    public void menampilkanLayur() 
    {
        System.out.println("Warna : " + warna);
        System.out.println("Rasa : " + rasa);
    }
}

class semangka extends buah
{
    String harga;
    int jumlah;

    public semangka(String warna, String rasa, int count) 
    {
        super(warna, rasa);
        this.harga = harga;
        this.jumlah = count;
    }

    @Override
    public void menampilkanLayur()
    {
        super.menampilkanLayur();
        System.out.println("Harga : " + harga);
        System.out.println("Jumlah : " + jumlah);
    }
}

public class teler
{
    public static void main(String[] args) 
    {
        semangka ObjBuy = new semangka("Hijau", "Manis", 10);
        ObjBuy.menampilkanLayur();
    }
}