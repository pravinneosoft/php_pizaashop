<?php

@include 'config.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h1 class="order__heading">Youre Order Has been placed succsesfully</h1>
    <p class="order__text">you will ricieve notification by an email</p>
    <a class="btn-order" href="products.php">Go and order some more</a>
</div>
</body>
</html>