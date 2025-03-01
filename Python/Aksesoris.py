from PetShop import PetShop
class Aksesoris(PetShop):
  def __init__(self, id=None, name="", category="", price=0, jenis="", warna="", bahan=""):
    super().__init__(id, name, category, price)
    self._jenis = jenis
    self._warna = warna
    self._bahan = bahan

  def set_jenis(self, jenis):
    self._jenis = jenis
  
  def set_warna(self, warna):
    self._warna = warna

  def set_bahan(self, bahan):
    self._bahan = bahan

  def get_jenis(self):
    return self._jenis
  
  def get_warna(self):
    return self._warna
  
  def get_bahan(self):
    return self._bahan
  
