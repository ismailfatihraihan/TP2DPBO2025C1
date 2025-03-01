#include <iostream>
#include <bits/stdc++.h>
using namespace std;

class PetShop {
  protected:
    int id;
    string name;
    string category;
    int price;

  public:
    PetShop() {
    }

    PetShop(int id, string name, string category, int price) {
        this->id = id;
        this->name = name;
        this->category = category;
        this->price = price;
    }

    void setId(int id) {
        this->id = id;
    }

    void setName(string name) {
        this->name = name;
    }

    void setCategory(string category) {
        this->category = category;
    }

    void setPrice(int price) {
        this->price = price;
    }

    int getId() {
        return id;
    }

    string getName() {
        return name;
    }

    string getCategory() {
        return category;
    }

    int getPrice() {
        return price;
    }

    void showPetShop() {
        cout << "\n🐾 Informasi Hewan di Pet Shop 🐾\n";
        cout << left
             << setw(5)  << "ID"
             << setw(20) << "Name"
             << setw(15) << "Category"
             << setw(10) << "Price"
             << endl;
        cout << string(50, '-') << endl;
        cout << left
             << setw(5)  << id
             << setw(20) << name
             << setw(15) << category
             << "Rp " << fixed << price
             << endl;
    }

    bool findName(string searchName) {
        if (name == searchName) {
            cout << "\n✅ Data ditemukan!\n";
            cout << left
                 << setw(5)  << "ID"
                 << setw(20) << "Name"
                 << setw(15) << "Category"
                 << setw(10) << "Price"
                 << endl;
            cout << string(50, '-') << endl;
            cout << left
                 << setw(5)  << id
                 << setw(20) << name
                 << setw(15) << category
                 << "Rp " << fixed << price
                 << endl;
            return true;
        }
        cout << "❌ Data tidak ditemukan.\n";
        return false;
    }

    void updatePetShop(string newName, string newCategory, int newPrice) {
        name = newName;
        category = newCategory;
        price = newPrice;
    }

    void deletePetShop() {
        id = 0;
        name = "";
        category = "";
        price = 0;
    }

    ~PetShop() {}
};

