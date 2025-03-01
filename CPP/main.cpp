#include "Baju.cpp"
#include <iostream>
#include <bits/stdc++.h>
using namespace std;

int main(){
  
  int n; cin >> n;
  list<Baju> list_baju;
  string name, category, jenis, warna, bahan, untuk, merk;
  int id, price, size;

  list_baju.push_back(Baju(1, "Baju Kemeja", "Atasan", 10000, 30, "Kemeja", "Putih", "Katun", "Pria", "Gucci"));
  list_baju.push_back(Baju(2, "Baju Kaos", "Atasan", 50000, 25, "Kaos", "Hitam", "Spandex", "Pria", "Adidas"));
  list_baju.push_back(Baju(3, "Kemeja", "Atasan", 15000, 35, "Kemeja", "Biru", "Katun", "Pria", "Gucci"));
  list_baju.push_back(Baju(4, "Baju Kemeja", "Atasan", 20000, 40, "Kemeja", "Merah", "Katun", "Pria", "Gucci"));
  list_baju.push_back(Baju(5, "Kaos", "Atasan", 75000, 30, "Kaos", "Putih", "Spandex", "Pria", "Adidas"));

  Baju baju;
  for (int i = 0; i < n; i++){

    cin >> id >> name >> category >> price >> size >> jenis >> warna >> bahan >> untuk >> merk;
    baju.setId(id);
    baju.setName(name);
    baju.setCategory(category);
    baju.setPrice(price);
    baju.setSize(size);
    baju.setJenis(jenis);
    baju.setWarna(warna);
    baju.setBahan(bahan);
    baju.setUntuk(untuk);
    baju.setMerk(merk);

    list_baju.push_back(baju);
  }

  cout << "\n==================================== Informasi Baju di Pet Shop ====================================\n\n";
  cout << left
       << setw(5)  << "ID"
       << setw(15) << "Name"
       << setw(10) << "Category"
       << setw(10) << "Price"
       << setw(10) << "Jenis"
       << setw(10) << "Warna"
       << setw(10) << "Bahan"
       << setw(10) << "Untuk"
       << setw(10) << "Size"
       << setw(5) << "Merk"
       << endl;
  cout << string(100, '-') << endl;
  for (Baju b : list_baju){
    b.showBaju();
  }

  return 0;
}