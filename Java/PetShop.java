public class PetShop {
  private int id;  
  private String name;
  private String category;
  private int price; 

  public PetShop() {
  }

  public PetShop(int id, String name, String category, int price) {
    this.id = id;
    this.name = name;
    this.category = category;
    this.price = price;
  }

  public void setId(int id) {
    this.id = id;
  }

  public void kasihId(int id) {
    this.id = id;
  }

  public void setName(String name) {
    this.name = name;
  }

  public void setCategory(String category) {
    this.category = category;
  }

  public void setPrice(int price) {
    this.price = price;
  }

  public int getId() {
    return id;
  }

  public String getName() {
    return name;
  }

  public String getCategory() {
    return category;
  }

  public int getPrice() {
    return price;
  }

  public void print() {
    System.out.println("ID: " + id);
    System.out.println("Name: " + name);
    System.out.println("Category: " + category);
    System.out.println("Price: " + price);
  }

  public boolean findName(String name) {
    return this.name.equals(name);
  }

  public void deletePetShop() {
    id = 0;
    name = "";
    category = "";
    price = 0;
  }

  public void updatePetShop(int id, String name, String category, int price) {
    this.id = id;
    this.name = name;
    this.category = category;
    this.price = price;
  }
}
