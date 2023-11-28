<?php 
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

//cek username dan password nya
if( $_POST["username"] == "admin" && $_POST["password"] == "12345" ) {
//jika benar, redirect ke halaman admin
   header("Location: admin.php");
   exit;
} else {
//jika slaah, tampilkan pesan kesalahan
$error = true;
}

}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        .button-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <?php if(isset($error)): ?>
            <p style="color: red; font-style: italic;">username / password salah!</p>
        <?php endif; ?>

        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li class="button-container">
                    <button type="submit" name="submit">Login</button>
                </li>
            </form>
        </ul>
    </div>
</body>
</html>
