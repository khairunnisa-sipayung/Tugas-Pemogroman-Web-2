<?php
require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'halaman_admin.php';
            </script>        
        ";
    } else {
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'halaman_admin.php';
            </script>        
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffd1dc;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .wrapper {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .input-box {
            margin-bottom: 15px;
            outline: none;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .teks1 {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-warning {
            position: relative;
            width: 175px;
            font-size:10px;
            border: 0;
            overflow: hidden;
            display: inline-block;
            color: #fff;
            background-color: #e44d26;
            padding: 7px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-warning input [typle="file"]{
            position: absolute;
            cursor: pointer;
        }

        i {
            color: white;
            font-size:20px;
        }

        #btn-1 {
            background-color: #ff4081;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div>
        <div class="table">
        </div>
        <h1>TAMBAH BARANG</h1>
        <div class="wrapper">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <label for="nama"><b>Nama Barang</b></label>
                    <input class="teks1" type="text" name="nama" id="nama" required>
                </div>
                <div>
                    <div class="input-box">
                        <label for="email"><b>Jenis Barang</b></label>
                        <input class="teks1" type="text" name="email" id="email" required>
                    </div>
                    <div>
                        <div class="input-box">
                            <label for="jurusan"><b>Stok Barang</b></label>
                            <input class="teks1" type="text" name="jurusan" id="jurusan" required>
                        </div>
                        <div>
                            <div class="input-box">
                                <label for="universitas"><b>Harga Barang</b></label>
                                <input class="teks1" type="text" name="universitas" id="universitas" required>
                            </div>
                            <div>
                                <div class="btn-warning">
                                    <label for="gambar">
                                    </label>
                                    <input type="file" name="gambar" id="gambar" required>
                                    </input>
                                </div>
                                <br>
                                <div>
                                    <button id="btn-1" type="submit" name="submit"><b>Tambah</b></button>
                                </div>
            </form>
        </div>

</body>

</html>