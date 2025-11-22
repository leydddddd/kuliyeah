//genap

class bmiTest
{
    private float weight;
    private float height;
    private String status;

    public void setBMI(float weight, float height)
    {
        this.weight = weight;
        this.height = height;

        float bmi = weight / (height * height);
        bmi = (bmi * 10000);

        if(bmi < 18.1)
        {
            this.status = "Kekurangan Berat Badan";
        }
        if(18.1 < bmi && bmi < 24.9)
        {
            this.status = "Normal atau Ideal";
        }
        if(25.0 < bmi && bmi < 29.9)
        {
            this.status = "Kelebihan Berat Badan";
        }
        if(bmi > 30.0)
        {
            this.status = "Anda Obesitas";
        }
        System.out.println(bmi);
    }

    public String getBMI()
    {
        return this.status;
    }
}

public class test{
    public static void main(String[] args) {
        bmiTest obj = new bmiTest();

        obj.setBMI(70, 170);
        System.out.println(obj.getBMI());
    }
}