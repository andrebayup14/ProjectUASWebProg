<?php
session_start();

if (isset($_SESSION["makanan"])) {
    $arr_makanan = $_SESSION["makanan"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Makanan</title>
    <style type="text/css">
    div
    {
        width:"40%"; float:left;
        border-style: solid;
    }
    img
    {
        width: 200px;
        text-align:center;
    }
    </style>
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<body>
    <div>
    <img src="images/rendang.jpg">
    <h2>Rendang</h2>
    <h3>Rp. 34.000</h3>
    <button id="btnPilih">Pilih</button>
    </div>
</body>
</html>