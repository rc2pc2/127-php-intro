<?php

if (count($_GET) > 0){
    foreach ($_GET as $key => $element) {
        var_dump($key . ": " . $element);
    }
}