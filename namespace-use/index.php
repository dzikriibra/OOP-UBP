<?php

use App\Produk;
require_once 'App/Produk.php';


Produk::getInfoKategori();
echo "----------------------------------------\n";


$produkLaptop = new Produk("P001", "Laptop", 10000000, 5);
echo "----------------------------------------\n";

// 3. Tampilkan informasi produk
$produkLaptop->tampilkanInfo();
echo "----------------------------------------\n";

?>