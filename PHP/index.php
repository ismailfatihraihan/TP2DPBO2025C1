<?php
require_once("Baju.php");
require_once("Aksesoris.php");
require_once("PetShop.php");

$data = [
    new Baju(1, "Baju Anjing", 100000, 10, "baju.jpg", "Baju", "Katun", "Merah", "Anjing", "M", "Adidas"),
    new Baju(2, "Baju Kucing", 80000, 5, "baju.jpg", "Baju", "Katun", "Biru", "Kucing", "S", "Nike"),
    new Baju(3, "Baju Kelinci", 70000, 7, "baju.jpg", "Baju", "Katun", "Hijau", "Kelinci", "L", "Puma"),
    new Baju(4, "Baju Hamster", 60000, 3, "baju.jpg", "Baju", "Katun", "Kuning", "Hamster", "XL", "Reebok"),
    new Baju(5, "Baju Sugar Glider", 50000, 2, "baju.jpg", "Baju", "Katun", "Pink", "Sugar Glider", "XXL", "Converse"),
    new Baju(6, "Baju Burung", 40000, 1, "baju.jpg", "Baju", "Katun", "Putih", "Burung", "L", "Vans"),
    new Baju(7, "Baju Ikan", 30000, 4, "baju.jpg", "Baju", "Katun", "Hitam", "Ikan", "XXL", "New Balance"),
    new Baju(8, "Baju Ular", 20000, 6, "baju.jpg", "Baju", "Katun", "Abu-abu", "Ular", "XXL", "Skechers"),
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Produk Hewan Peliharaan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-6xl mx-auto bg-white p-6 shadow-lg rounded-lg">
    <h2 class="text-3xl font-bold text-center text-white bg-gradient-to-r from-blue-300 to-cyan-400 py-3 rounded-lg">
        Daftar Produk Hewan Peliharaan
    </h2>


    <div class="overflow-x-auto mt-4">
        <table class="w-full border-collapse border border-gray-300 shadow-lg bg-white rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nama</th>
                    <th class="border border-gray-300 px-4 py-2">Harga</th>
                    <th class="border border-gray-300 px-4 py-2">Stok</th>
                    <th class="border border-gray-300 px-4 py-2">Jenis</th>
                    <th class="border border-gray-300 px-4 py-2">Bahan</th>
                    <th class="border border-gray-300 px-4 py-2">Warna</th>
                    <th class="border border-gray-300 px-4 py-2">Untuk</th>
                    <th class="border border-gray-300 px-4 py-2">Size</th>
                    <th class="border border-gray-300 px-4 py-2">Merk</th>
                    <th class="border border-gray-300 px-4 py-2">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item): ?>
                <tr class="hover:bg-gray-100 text-center">
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getId() ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getNamaProduk() ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-green-600 font-semibold">Rp <?= number_format($item->getHargaProduk(), 0, ',', '.') ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getStokProduk() ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getJenis() ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getBahan() ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getWarna() ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getUntuk() ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getSize() ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $item->getMerk() ?></td>
                    <td class="border border-gray-300 px-4 py-2">
                        <img src="<?= $item->getFotoProduk() ?>" alt="Gambar" class="w-16 h-16 object-cover rounded-lg shadow-md">
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
