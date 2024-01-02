<?php
session_start();
include("koneksi.php");
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
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
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        #app {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ff00ff;
            color: white;
            padding: 10px;
            margin-bottom: 5px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li {
            margin: 0 17px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: red;
            transition: .2s;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav>
            <ul>
                <li> <a href="home.php">Home</a></li>
                <?php if (in_array("guru", $_SESSION['admin_akses'])) { ?>
                    <li> <a href="staff.php">Staff</a></li>
                <?php } ?>
                <?php if (in_array("siswa", $_SESSION['admin_akses'])) { ?>
                    <li> <a href="data_barang.php">Barang</a></li>
                <?php } ?>
                <?php if (in_array("spp", $_SESSION['admin_akses'])) { ?>
                    <li> <a href="halaman_admin.php">Admin</a></li>
                <?php } ?>
            </ul>
            <ul>
                <li> <a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>
