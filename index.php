<?php
    $name = $_GET["name"];
    $age =$_GET["age"];

    $name = str_replace("n", "s", $name); // ucwords($name) 
?>
<pre>
    <?php var_dump($_GET);   ?>
    <?php var_dump($ginetto);   ?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro</title>
</head>
<body>
    <main>
        <h1>
            Ciao, il mio nome e': <?php  echo $name; ?>
        </h1>
        <h2>
            Sono nata nel <?php echo 2024 - $age; ?>
        </h2>
        <h3>
            Oggi succedera' che: <?php echo "ciao, " . "<br> nino"; ?>
        </h3>
    </main>    

    <form action="./index.php" method="GET">
        <input type="text" name="firstName" id="first-name">
        <button type="submit">
            Invia
        </button>
    </form>

</body>
</html>