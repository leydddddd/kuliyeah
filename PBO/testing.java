public class testing 
{
    String testering;

    static void testingStaticMethod()
    {
        System.out.println("Hello World");
    }

    public void testingNonStaticMethod()
    {
        System.out.println("Hello World");
    }

    public testing(String tester)
    {
        testering = tester;
    }

    public static void main(String[] args) 
    {
        testing.testingStaticMethod();
        testing newObj = new testing("Hello Damn World!");
        newObj.testingNonStaticMethod();
        System.out.println(newObj.testering);
    }
}