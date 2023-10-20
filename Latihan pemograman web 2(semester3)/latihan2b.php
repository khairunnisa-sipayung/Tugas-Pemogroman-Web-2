<!DOCTYPE html>
<html>
<head>
    <style>
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
<div class="wrapper">
        <table cellspacing="5">
            <?php
            $rows = 5;

            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>"; 
    
                for ($j = 1; $j <= $i; $j++) {

                    echo "<td>" . $j . "</td>";
                }
                echo "</tr>"; 
            }
            ?>
    </div>
</body>
</html>