<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .body1 {
        background-color: yellow;
    }
    .body2 {
        background-color: red;
    }
    .body3 {
        background-color: blue;
    }
    .body4 {
        background-color: aqua;
    }
    .body5 {
        background-color: orange;
    }
    .body6 {
        background-color: magenta;
    }
</style>
<body class="body<?php echo rand(1,6); ?>">
    <?php echo 'I use PHP'; ?>
    <h1>Hi, mate</h1>
    <h1><?php echo rand(1, 6); ?></h1>
</body>
</html>