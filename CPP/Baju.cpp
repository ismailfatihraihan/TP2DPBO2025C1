#include <bits/stdc++.h>
#include "Aksesoris.cpp"
using namespace std;

class Baju : public Aksesoris
{
protected:
    string untuk;
    int size;
    string merk;

public:
    Baju()
    {
    }

    Baju(int id,
        string name,
        string category,
        int price, 
        int sz, 
        string jenis, 
        string warna, 
        string bahan, 
        string utk, 
        string mrk) : Aksesoris(id, name, category, price, jenis, warna, bahan)
    {
        this->untuk = utk;
        this->size = sz;
        this->merk = mrk;
    }

    void setUntuk(string utk)
    {
        this->untuk = utk;
    }

    string getUntuk()
    {
        return this->untuk;
    }

    void setSize(int sz)
    {
        this->size = sz;
    }

    int getSize()
    {
        return this->size;
    }

    void setMerk(string mrk)
    {
        this->merk = mrk;
    }

    string getMerk()
    {
        return this->merk;
    }

    void showBaju()
    {
        cout << left
             << setw(5) << getId()
             << setw(15) << getName()
             << setw(10) << getCategory()
             << "Rp " << fixed << getPrice() << "  "
             << setw(10) << getJenis()
             << setw(10) << getWarna()
             << setw(10) << getBahan()
             << setw(10) << getUntuk()
             << setw(10) << getSize()
             << setw(5) << getMerk()
             << endl;
    }

    ~Baju()
    {

    }
};
