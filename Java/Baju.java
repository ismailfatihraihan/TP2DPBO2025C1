public class Baju extends Aksesoris {
  private String untuk;
  private int size;
  private String merk;

  public Baju() {
  }

  public Baju(int id, String name, String category, int price, int size, String jenis, String warna, String bahan, String untuk, String merk) {
    super(id, name, category, price, jenis, warna, bahan);
    this.size = size;
    this.untuk = untuk;
    this.merk = merk;
  }

  void setUntuk(String untuk) {
    this.untuk = untuk;
  }

  void setSize(int size) {
    this.size = size;
  }

  void setMerk(String merk) {
    this.merk = merk;
  }

  String getUntuk() {
    return untuk;
  }

  int getSize() {
    return size;
  }

  String getMerk() {
    return merk;
  }

  void showBaju(){
    System.out.printf("%-5d %-15s %-10s %-10d %-10d %-10s %-10s %-10s %-10s %-5s\n",
    getId(), getName(), getCategory(), getPrice(), getSize(), getJenis(), getWarna(), getBahan(), getUntuk(), getMerk());
  }
}
