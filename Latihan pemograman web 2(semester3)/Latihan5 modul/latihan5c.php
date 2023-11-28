<?php
// Membuat associative array dengan data perusahaan teknologi
$perusahaanTeknologi = array(
    "Perusahaan 1" => array(
        "Nama" => "Microsoft",
        "Deskripsi" => "Perusahaan perangkat lunak terkemuka yang dikenal dengan sistem operasi Windows dan aplikasi seperti Microsoft Office.",
        "Tahun Didirikan" => 1975,
        "Pendiri" => "Bill Gates dan Paul Allen",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/miscrosoft.jpg"
    ),
    "Perusahaan 2" => array(
        "Nama" => "Amazon",
        "Deskripsi" => "Perusahaan e-commerce dan layanan cloud computing terbesar di dunia.",
        "Tahun Didirikan" => 1994,
        "Pendiri" => "jeff Bezos",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/amazon.jpeg"
    ),
    "Perusahaan 3" => array(
        "Nama" => "Facebook",
        "Deskripsi" => "Perusahaan media sosial yang mendukung platform seperti Facebook, Instagram, WhatsApp, dan Oculus VR",
        "Tahun Didirikan" => 2004,
        "Pendiri" => "Mark Zuckerberg, Eduardo Saverin, Andrew McCollum, Dustin Moskovitz, dan Chris Hughes.",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/facebook.jpeg"
    ),
    "Perusahaan 4" => array(
        "Nama" => "Google",
        "Deskripsi" => "Perusahaan teknologi terkemuka yang mengkhususkan diri dalam mesin pencari dan layanan internet.",
        "Tahun Didirikan" => 1998,
        "Pendiri" => "Larry Page dan Sergey Brin",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/google.png"
    ),
    "Perusahaan 5" => array(
        "Nama" => "IBM (International Business Machines Corporation)",
        "Deskripsi" => "Perusahaan teknologi informasi multinasional yang fokus pada komputasi dan layanan TI.",
        "Tahun Didirikan" => 1911,
        "Pendiri" => "Charles Ranlett Flint",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/ibm.jpeg"
    ),
    "Perusahaan 6" => array(
        "Nama" => "Intel Corporation",
        "Deskripsi" => "Perusahaan teknologi yang terkenal dengan mikroprosesor",
        "Tahun Didirikan" => 1968,
        "Pendiri" => "Robert Noyce dan Gordon Moore",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/IC.jpeg"
    ),
    "Perusahaan 7" => array(
        "Nama" => "Apple Inc.",
        "Deskripsi" => "Perusahaan teknologi yang terkenal dengan produk-produk seperti iPhone, Mac, dan iPad.",
        "Tahun Didirikan" => 1976,
        "Pendiri" => "Steve Jobs, Steve Wozniak, dan Ronald Wayne",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/appleinc.jpeg"
    ),
    "Perusahaan 8" => array(
        "Nama" => "Oracle Corporation",
        "Deskripsi" => "Perusahaan perangkat lunak yang terkenal dengan basis data dan solusi perangkat lunak korporat",
        "Tahun Didirikan" => 1977,
        "Pendiri" => "Larry Ellison, Bob Miner, dan Ed Oates",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/oracle.jpeg"
    ),
    "Perusahaan 9" => array(
        "Nama" => "Cisco Systems, Inc",
        "Deskripsi" => "Perusahaan teknologi yang mengkhususkan diri dalam jaringan dan komunikasi.",
        "Tahun Didirikan" => 1984,
        "Pendiri" => "Leonard Bosack dan Sandy Lerner",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/cisco.jpeg"
    ),
    "Perusahaan 10" => array(
        "Nama" => "Samsung Electronics",
        "Deskripsi" => "Perusahaan teknologi konsumer terkemuka yang memproduksi nernagai produk elektronik.",
        "Tahun Didirikan" => 1938,
        "Pendiri" => "Lee Byung-chul",
        "Gambar" => "Foto perusahaan-perusahaan teknologi/samsung.jpeg"
    ),
    
);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Perusahaan Teknologi</title>
</head>
<body>
<?php
// Cek apakah parameter 'nama' telah diterima
if (isset($_GET['nama']) && isset($perusahaanTeknologi[$_GET['nama']])) {
    $perusahaan = $perusahaanTeknologi[$_GET['nama']];
?>
    <ul>
        <li><img src="<?= $perusahaan['Gambar']; ?>"></li>
        <li><?= $perusahaan["Nama"]; ?></li>
        <li><?= $perusahaan["Deskripsi"]; ?></li>
        <li>Tahun Didirikan: <?= $perusahaan["Tahun Didirikan"]; ?></li>
        <li>Pendiri: <?= $perusahaan["Pendiri"]; ?></li>
    </ul>

    <a href="latihan5b1.php">Kembali</a>
<?php
} else {
    echo "Data perusahaan tidak ditemukan.";
}
?>
</body>
</html>
