<?php
// Kelas Buku
class Buku {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function infoBuku() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}";
    }
}

// Kelas BukuDigital sebagai turunan dari Buku
class BukuDigital extends Buku {
    private $ukuranFile;

    public function __construct($judul, $penulis, $ukuranFile) {
        parent::__construct($judul, $penulis);
        $this->ukuranFile = $ukuranFile;
    }

    // Override method infoBuku
    public function infoBuku() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}, Ukuran File: {$this->ukuranFile} MB";
    }
}

// Contoh penggunaan
$bukuFisik = new Buku("Pemrograman PHP", "Jane Doe");
$bukuDigital = new BukuDigital("Pemrograman PHP", "Jane Doe", 2.5);

echo $bukuFisik->infoBuku();    // Output: Judul: Pemrograman PHP, Penulis: Jane Doe
echo "\n";
echo $bukuDigital->infoBuku();   // Output: Judul: Pemrograman PHP, Penulis: Jane Doe, Ukuran File: 2.5 MB
?>