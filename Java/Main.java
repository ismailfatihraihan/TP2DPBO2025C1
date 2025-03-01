import java.util.Scanner;
import java.util.ArrayList;

public class Main {
  public static void main(String[] args) {
    int n = 0;
    Scanner sc = new Scanner(System.in);

    ArrayList<Baju> baju = new ArrayList<Baju>();
    baju.add(new Baju(1, "Baju Kemeja", "Atasan", 100000, 30, "Kemeja", "Putih", "Katun", "Pria", "Gucci"));
    baju.add(new Baju(2, "Baju Kaos", "Atasan", 50000, 25, "Kaos", "Hitam", "Spandex", "Pria", "Adidas"));
    baju.add(new Baju(3, "Baju Kemeja", "Atasan", 150000, 35, "Kemeja", "Biru", "Katun", "Wanita", "Gucci"));
    baju.add(new Baju(4, "Baju Kaos", "Atasan", 75000, 30, "Kaos", "Putih", "Spandex", "Wanita", "Adidas"));
    baju.add(new Baju(5, "Baju Kemeja", "Atasan", 200000, 40, "Kemeja", "Merah", "Katun", "Pria", "Gucci"));
    try {
      n = sc.nextInt();
      for (int i = 0; i < n; i++) {
        Baju b = new Baju();
        b.setId(sc.nextInt());
        b.setName(sc.next());
        b.setCategory(sc.next());
        b.setPrice(sc.nextInt());
        b.setSize(sc.nextInt());
        b.setJenis(sc.next());
        b.setWarna(sc.next());
        b.setBahan(sc.next());
        b.setUntuk(sc.next());
        b.setMerk(sc.next());
        baju.add(b);
      }
    } catch (Exception e) {
      e.printStackTrace();
    }

    System.out.println("\n======================================== Informasi Baju di Pet Shop ========================================\n");
    System.out.printf("%-5s %-15s %-10s %-10s %-10s %-10s %-10s %-10s %-10s %-5s\n",
            "ID", "Name", "Category", "Price", "Size", "Jenis", "Warna", "Bahan", "Untuk", "Merk");
    System.out.println("------------------------------------------------------------------------------------------------------------");
    
    for (Baju b : baju) {
      b.showBaju();
    }
    
    sc.close();
  }
}