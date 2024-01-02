<?php include("inc_header.php");
if (!in_array("spp", $_SESSION['admin_akses'])) {
    echo "kamu tidak memiliki akses";
    include("footer.php");
    exit();
}
?>
<?php include("footer.php");
require 'functions.php';
$result = mysqli_query($conn, "SELECT * FROM barangnissa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #ffd1dc;
        }

        h1 {
            text-align: center;
            color: white;
            background: blueviolet;
            width: 100%;
            margin: auto;
        }

        th {
            color: black;
            background: pink;
        }

        tr {
            margin: auto;
            text-align: center;
            align-items: center;
            background: white;
        }

        td {
            color: black;
        }

        table {
            margin: auto;
        }

        #btn-2 {
            padding: 10px 70px;
            background: blueviolet;
            border: transparent;
            border-radius: 5px;
            margin: auto;
            display: flex;
            margin-top: 30px;
        }

        #btn-2:hover {
            background: white;
            transform: scale(1.03);
        }

        a {
            color: #dedede;
            font-size: 20px;
            text-decoration: none;
            text-align: center;
            margin: auto;
        }

        c {
            color: red;
        }

        c:hover {
            color: blueviolet;
        }

        .print {
            background: salmon;
            padding: 10px 20px;
            margin: auto;
            display: block;
            color: white;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            border: 1px solid black;
            transition: .2s;
            transform: scale (1.03);
        }

        .print:hover {
            background: blueviolet;
        }
    </style>
</head>

<body>
    <div>
        <h1>DATA BARANG HALAMAN ADMIN</h1>
        <button id="btn-2"> <a href="Tambah.php" target="_blank">+ Insert Data</a> </button>
        <br>
        <a href="print.php" target="_blank">
        <button class="print">Download.pdf - Print</button> </a>
        <br>
        <table border="3" cellpadding="10" cellspacing="0">

            <tr>
                <th>ID</th>
                <th>NAMA BARANG</th>
                <th>JENIS BARANG</th>
                <th>STOK BARANG</th>
                <th>HARGA</th>
                <th>GAMBAR</th>
                <th>AKSI</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i; ?> </td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                    <td><?= $row["universitas"]; ?></td>
                    <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?> "><C>UBAH</C></a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="
                        return confirm('Yakin?');"><c>HAPUS</c></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </div>
</body>

</html>