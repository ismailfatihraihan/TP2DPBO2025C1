from Baju import Baju

n = int(input())
baju = []

baju.append(Baju(1, "Baju Kemeja", "Atasan", 10000, 30, "Kemeja", "Putih", "Katun", "Pria", "Gucci"))
baju.append(Baju(2, "Baju Kaos", "Atasan", 5000, 28, "Kaos", "Hitam", "Katun", "Pria", "Adidas"))
baju.append(Baju(3, "Baju Batik", "Atasan", 15000, 32, "Batik", "Merah", "Katun", "Pria", "Bali Batik"))
baju.append(Baju(4, "Baju Kemeja", "Atasan", 10000, 30, "Kemeja", "Putih", "Katun", "Pria", "Gucci"))
baju.append(Baju(5, "Baju Kaos", "Atasan", 5000, 28, "Kaos", "Hitam", "Katun", "Pria", "Adidas"))

for i in range(n):
  id = int(input())
  name = input()
  category = input()
  price = int(input())
  size = int(input())
  jenis = input()
  warna = input()
  bahan = input()
  untuk = input()
  merk = input()
  baju.append(Baju(id, name, category, price, size, jenis, warna, bahan, untuk, merk))

print("\n" + "=" * 105)
print(" " * 37 + "Informasi Baju di Pet Shop")
print("=" * 105 + "\n")

header = f"{'ID':<5}{'Name':<15}{'Category':<10}{'Price':<15}{'Size':<5}{'Jenis':<15}{'Warna':<10}{'Bahan':<10}{'Untuk':<10}{'Merk':<10}"
print(header)
print("-" * 105)
for b in baju:
  b.show_baju()

