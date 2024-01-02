<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:home.php");
}
include("koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])) {
    $username  = $_POST['username'];
    $password   = $_POST['password'];
    if ($username  == '' or $password == '') {
        $err .= "<ul>Silahkan MasukKan Username dan Password!</ul>";
    }
    if (empty($err)) {
        $sql1 = "select * from admin where username = '$username' ";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != md5($password)) {
            $err .= "<ul>Akun tidak di temukan</ul>";
        }
    }
    if (empty($err)) {
        $login_id = $r1['login_id'];
        $sql1 = "select * from admin_akses where login_id = '$login_id'";
        $q1 = mysqli_query($koneksi, $sql1);
        while ($r1 = mysqli_fetch_array($q1)) {
            $akses[] = $r1['akses_id'];
        }
        if (empty($akses)) {
            $err .= "<li>Anda Tidak Punya akses ke halaman admin ini</li>";
        }
    }
    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_akses'] = $akses;
        header("location:home.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: #ffd1dc;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        ul {
            color: red;
            margin-left: 2px;
            margin-top: -10px;
            font-size: 18px;
        }

        #app {
            width: 500px;
            height: 300px;
            background: #ff00ff;
            opacity: 0.9;
            border-radius: 3px;
            margin: auto;
            margin-top: 130px;
            box-shadow: 0 0 10px rgba(1, 1, 1, 0.1);
        }

        h1 {
            text-align: center;
            padding: 30px;
            color: white;
            margin: -5px;
            
        }

        .input {
            margin: auto;
            display: flex;
            width: 300px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            color: black;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .input1 {
            width: 305px;
            height: 38px;
            margin: auto;
            display: flex;
            text-align: center;
            color: white;
            display: block;
            font-size: 20px;
            background: blueviolet;
            border: 1px solid white;
            cursor: pointer;
        }

        .input1:hover {
            background: salmon;
        }
    </style>
</head>

<body>
    <div id="app">
        <h1>Halaman Login</h1>
        <?php
        if ($err) {
            echo "<ul>$err</ul>";
        }
        ?>
        <form action="" method="post">
            <input type="text" value="<?php echo $username ?>" name="username" class="input" placeholder="Username" /> <br>
            <input type="password" name="password" class="input" placeholder="Password" /> <br><br>
            <input type="submit" name="login" class="input1" value="Login" />
        </form>
    </div>
</body>

</html>