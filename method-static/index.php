<?php 

class Produk {
    public const PAJAK = 0.11;

    public $kode;
    public $nama;
    public $harga;
    public $stok;

    public function __construct($kode, $nama, $harga, $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function hitungTotalSetelahPajak() {
        $totalPajak = $this->harga * self::PAJAK;
        return $this->harga + $totalPajak;
    }

    public function tampilkanInfo() {
        echo "Produk: " . $this->nama . "\n";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "\n";
        echo "Stok: " . $this->stok . "\n";
        echo "Pajak: " . (self::PAJAK * 100) . "%\n";
        echo "Total harga setelah pajak: Rp" . number_format($this->hitungTotalSetelahPajak(), 0, ',', '.') . "\n";
    }

    public static function getInfoKategori() {
        echo "Kategori: Elektronik & Gadget\n";
    }
}

Produk::getInfoKategori();

$produkLaptop = new Produk("P001", "Laptop", 10000000, 5);

$produkLaptop->tampilkanInfo();

?>