<?php include("inc_header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Pink</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffd1dc;
            color: #333;
        }

        header {
            background-color: #ff69b4;
            padding: 1rem;
            text-align: center;
            color: white;
            font-size: 1em;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .product {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        footer {
            background-color: #ff69b4;
            color: white;
            padding: 1em;
            text-align: center;
        }

        button {
            background: red;
            padding: 5px 10px;
            border-radius: 5px;
        }

        button:hover {
            background: orange;
        }

        c:hover {
            color: white;
        }

        a {
            font-size: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Toko Nissa</h1>
        <p>Tempat Belanja Pilihan Anda</p>
    </header>

    <section>
        <div class="product">
            <img src="laptop1.jpg" alt="Produk 1">
            <h2>Laptop Windows 11</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 7.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop2.jpg" alt="Produk 2">
            <h2>Laptop Linux</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 5.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop3.jpg" alt="Produk 1">
            <h2>Macbook</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 20.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop1.jpg" alt="Produk 2">
            <h2>Laptop Linux</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 7.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop2.jpg" alt="Produk 1">
            <h2>Laptop Windows 11</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 5.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop3.jpg" alt="Produk 2">
            <h2>Macbook</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 15.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop1.jpg" alt="Produk 1">
            <h2>Laptop Windows 11</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 7.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop2.jpg" alt="Produk 2">
            <h2>Laptop Linux</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 5.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>

        <div class="product">
            <img src="laptop3.jpg" alt="Produk 2">
            <h2>Macbook</h2>
            <p>Deskripsi singkat isi dewek nisa yee</p>
            <p><strong>Harga:</strong> Rp 18.000.000</p>
            <button> <a href="" target="_BLANK"> <c>Beli Sekarang</c></a></button>
        </div>


    </section>

    <footer>
        <p>&copy; 2023 Toko Nissa</p>
    </footer>

</body>
</html>
