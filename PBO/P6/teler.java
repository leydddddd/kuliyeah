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
    int harga;
    int jumlah;

    public semangka(String warna, String rasa, int total, int price) 
    {
        super(warna, rasa);
        this.harga = total;
        this.jumlah = total * price;
    }

    @Override
    public void menampilkanLayur()
    {
        super.menampilkanLayur();
        System.out.println("Harga : " + this.jumlah);
        System.out.println("Jumlah : " + this.harga);
    }
}

public class teler
{
    public static void main(String[] args) 
    {
        semangka ObjBuy = new semangka("Hijau", "Manis", 2, 10000);
        ObjBuy.menampilkanLayur();
    }
}