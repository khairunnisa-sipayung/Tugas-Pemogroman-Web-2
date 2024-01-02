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
            background: #dedede;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: Arial, Serif;
            text-align: center;
            color: white;
            background: blueviolet;
            width: 100%;
            margin:auto;
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

        a {
            color:white;
            font-size: 20px;
            text-decoration: none;
            text-align: center;
            margin: auto;
        }
    </style>
</head>

<body>
    <diiv>
        <h1>BARANG TERSEDIA</h1>
        <br><br>
        <table border="3" cellpadding="10" cellspacing="0">

            <tr>
                <th>ID</th>
                <th>NAMA BARANG</th>
                <th>JENIS BARANG</th>
                <th>STOK BARANG</th>
                <th>HARGA BARANG</th>
                <th>GAMBAR</th>
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
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </table>
        <script>
            window.print();
        </script>
    </diiv>

</body>

</html>