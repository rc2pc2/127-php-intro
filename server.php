<?php 
$class = $_GET["userClass"] ?? "font-base";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <h1 class="<?php echo $class ?>">
            Benvenut*! Eccoci qua!!!
        </h1>
    </body>
</html>
