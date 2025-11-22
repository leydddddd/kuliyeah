public class latihan1 {
    public static void main(String[] args) throws Exception {
        
        String[] names = {"A", "B", "C", "D", "E"};
        
        System.out.println(names[0]);
        //System.out.println(names[5]);

        try {
            System.out.println(names[5]);
        } catch (Exception e) {
            System.out.println("Data Melebihi Batas Array");
        } finally {
            System.out.println("Akhir dari Program");
        }
    }
}