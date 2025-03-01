class PetShop:
    def __init__(self, id=0, name="", category="", price=0):
        self._id = id
        self._name = name
        self._category = category
        self._price = price

    def set_id(self, id):
        self._id = id

    def set_name(self, name):
        self._name = name

    def set_category(self, category):
        self._category = category

    def set_price(self, price):
        self._price = price

    def get_id(self):
        return self._id

    def get_name(self):
        return self._name

    def get_category(self):
        return self._category

    def get_price(self):
        return self._price

    # Menampilkan informasi pet shop
    def show_pet_shop(self):
        print("\n🐾 Informasi Hewan di Pet Shop 🐾")
        print(f"{'ID':<5}{'Name':<20}{'Category':<15}{'Price':<10}")
        print("-" * 50)
        print(f"{self._id:<5}{self._name:<20}{self._category:<15}Rp {self._price:,}")

    # Mencari nama dalam pet shop
    def find_name(self, search_name):
        if self._name.lower() == search_name.lower():
            print(f"{'ID':<5}{'Name':<20}{'Category':<15}{'Price':<10}")
            print("-" * 50)
            print(f"{self._id:<5}{self._name:<20}{self._category:<15}Rp {self._price:,}")
            return True
        return False

    # Update data pet shop
    def update_pet_shop(self, new_name, new_category, new_price):
        self._name = new_name
        self._category = new_category
        self._price = new_price

    # Menghapus data pet shop
    def delete_pet_shop(self):
        self._id = 0
        self._name = ""
        self._category = ""
        self._price = 0

