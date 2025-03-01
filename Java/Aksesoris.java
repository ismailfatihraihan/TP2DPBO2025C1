public class Aksesoris extends PetShop {
  private String jenis;
  private String warna;
  private String bahan;

  public Aksesoris() {
  }

  public Aksesoris(int id, String name, String category, int price, String jenis, String warna, String bahan) {
    super(id, name, category, price);
    this.jenis = jenis;
    this.warna = warna;
    this.bahan = bahan;
  }

  public void setJenis(String jenis) {
    this.jenis = jenis;
  }

  public void setWarna(String warna) {
    this.warna = warna;
  }

  public void setBahan(String bahan) {
    this.bahan = bahan;
  }

  public String getJenis() {
    return jenis;
  }

  public String getWarna() {
    return warna;
  }

  public String getBahan() {
    return bahan;
  }
}
