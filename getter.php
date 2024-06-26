<?php

if (count($_GET) > 0){
    foreach ($_GET as $key => $element) {
        var_dump($key . ": " . $element);
    }
}
?>

<form action="./server.php" method="GET">
    <input type="text" name="userClass" id="userClass">
    <button type="submit">Invia</button>
</form>