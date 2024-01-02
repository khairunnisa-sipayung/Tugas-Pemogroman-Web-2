<?php include("inc_header.php");
if (!in_array("guru", $_SESSION['admin_akses'])) {
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
            margin: 0;
            padding: 0;
            font-family: Arial, Serif;
        }

        h1 {
            text-align: center;
            color: white;
            width: 100%;
            margin: auto;
            background: blueviolet;
        }

        th {
            color: black;
            background: pink;
        }

        tr {
            margin: auto;
            text-align: center;
            align-items: center;
        }

        td {
            color: black;
        }

        table {
            margin: auto;
        }

        #btn-2 {
            padding: 10px 25px;
            background: blueviolet;
            border: transparent;
            border-radius: 5px;
            margin: auto;
            display: flex;
            margin-top: 30px;
            cursor: pointer;
        }

        #btn-2:hover {
            background: pink;
            transform: scale(1.03);
            transition: .3s;
        }

        a {
            color: white;
            font-size: 20px;
            text-decoration: none;
            text-align: center;
            margin: auto;
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
    <diiv>
        <h1>SELAMAT DATANG DI HALAMAN STAF</h1>
        <br><br><br><br><br>
        <button id="btn-2"> <a href="Tambah.php" target="_blank">+ Tambah Data Barang Lainya</a> </button>
        <br><br>
        <a href="print.php" target="_blank">
        <button class="print">= Download.pdf - Print</button> </a>
    </div>

</body>

</html>