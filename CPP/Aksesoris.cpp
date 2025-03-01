#include <bits/stdc++.h>
#include "PetShop.cpp"
using namespace std;

class Aksesoris: public PetShop {
  protected:
    string jenis;
    string warna;
    string bahan;
  public:
  Aksesoris(){
  }

  Aksesoris(int id, string name, string category, int price, string j, string w, string b) : PetShop(id , name, category, price){
    this->jenis = j;
    this->warna = w;
    this->bahan = b;
  }

  void setJenis(string j){
    this->jenis = j;
  }

  string getJenis(){
    return this->jenis;
  }

  void setWarna(string w){
    this->warna = w;
  }

  string getWarna(){
    return this->warna;
  }

  void setBahan(string b){
    this->bahan = b;
  }

  string getBahan(){
    return this->bahan;
  }

  ~Aksesoris(){
  }
};