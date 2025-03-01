from Aksesoris import Aksesoris
class Baju(Aksesoris):
  def __init__(self,
    id=None, 
    name="", 
    category="", 
    price=0, 
    size=0, 
    jenis="", 
    warna="", 
    bahan="", 
    untuk="", 
    merk=""):
    super().__init__(id, name, category, price, jenis, warna, bahan)
    self._size = size
    self._untuk = untuk
    self._merk = merk

  def set_size(self, size):
    self._size = size

  def get_size(self):
    return self._size
  
  def set_untuk(self, untuk):
    self._untuk = untuk

  def get_untuk(self):
    return self._untuk
  
  def set_merk(self, merk):
    self._merk = merk

  def get_merk(self):
    return self._merk
  
  def show_baju(self):
    print(f"{self._id:<5}{self._name:<15}{self._category:<10}Rp {self._price:<12}{self._size:<5}{self._jenis:<15}{self._warna:<10}{self._bahan:<10}{self._untuk:<10}{self._merk:<10}")

  
