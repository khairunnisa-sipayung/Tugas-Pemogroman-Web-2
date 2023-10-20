<!DOCTYPE html>
<html>
<head>
    <style>
        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            width: 10%;
        }

         th, td {
            border: 1px solid black;
            text-align: center;
            width: max-content;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <table cellspacing="5">
        <?php
        $rows = 5;

        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr class='" . ($i % 2 == 0 ? "genap" : "ganjil") . "'>";

            for ($j = 1; $j <= $i; $j++) {
                echo "<td>" . $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
