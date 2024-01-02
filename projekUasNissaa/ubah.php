<?php
require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM barangnissa WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'halaman_admin.php';
            </script>        
        ";
    } else {
        echo "
            <script>
            alert('data gagal diubah!');
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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffd1dc; /* Warna pink */
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
        <h1>UPDATE DATA</h1>
        <div class="wrapper">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
                <div class="input-box">
                    <label for="nama"><b>Nama : </b></label>
                    <input class="teks1" type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
                </div>
                <div>
                    <div class="input-box">
                        <label for="email"><b>Email : </b></label>
                        <input class="teks1" type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
                    </div>
                    <div>
                        <div class="input-box">
                            <label for="jurusan"><b>Jurusan : </b></label>
                            <input class="teks1" type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
                        </div>
                        <div>
                            <div class="input-box">
                                <label for="universitas"><b>Universitas : </b></label>
                                <input class="teks1" type="text" name="universitas" id="universitas" required value="<?= $mhs["universitas"]; ?>">
                            </div>
                            <div>
                                <div class="btn-warning">
                                    <label for="gambar">
                                    </label>
                                    <input type="file" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
                                    </input>
                                </div>
                                <br>
                                <div>
                                    <button id="btn-1" type="submit" name="submit"><b>UPDATE</b></button>
                                </div>
            </form>
        </div>

</body>

</html>