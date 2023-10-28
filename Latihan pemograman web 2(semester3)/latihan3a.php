<!DOCTYPE html>
<html>
<head>
    <style>
        .styled-text {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            text-decoration: bolder;
            font-style: italic; /* Menambahkan gaya italic */
        }
    </style>
</head>
<body>

<?php
function change_text_style($tulisan) {
    echo '<div class="styled-text">' . $tulisan . '</div>';
}

$tulisan = "Hello World! Here I come!";
change_text_style($tulisan);
?>

</body>
</html>