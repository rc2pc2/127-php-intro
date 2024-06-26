<?php 
// Creare una variabile con un paragrafo di testo a vostra scelta.
$paragraph = "Call me Ishmael. Some years ago- never mind how long precisely- having little or no money in my purse, and nothing particular to interest me on shore, I thought I would sail about a little and see the watery part of the world. It is a way I have of driving off the spleen and regulating the circulation. Whenever I find myself growing grim about the mouth; whenever it is a damp, drizzly November in my soul; whenever I find myself involuntarily pausing before coffin warehouses, and bringing up the rear of every funeral I meet; and especially whenever my hypos get such an upper hand of me, that it requires a strong moral principle to prevent me from deliberately stepping into the street, and methodically knocking people’s hats off- then, I account it high time to get to sea as soon as I can. This is my substitute for pistol and ball. With a philosophical flourish Cato throws himself upon his sword; I quietly take to the ship. There is nothing surprising in this. If they but knew it, almost all men in their degree, some time or other, cherish very nearly the same feelings towards the ocean with me.";

if (isset($_GET["badword"])) { 
    $badword = $_GET["badword"];
} else {
    $badword = "";
}


$symbol = "***"; // 
$censoredParagraph = str_ireplace($badword, $symbol, $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <header>
        <h1>
            PHP Badwords
        </h1>
    </header>
    <main>
        <article>
            <h2>
                Original paragraph:
            </h2>
            <p>
                <?php echo $paragraph; ?>
            </p>
            <pre>Which is <?php echo strlen($paragraph); ?> characters</pre>
        </article>
        <article>
            <h2>
                Original paragraph:
            </h2>
            <p>
                <?php echo $censoredParagraph; ?>
            </p>
            <pre>Which is <?php echo strlen($censoredParagraph); ?> characters</pre>
        </article>

        <form action="./badwords.php" method="GET">
            <input type="text" name="badword" id="badword">
            <button type="submit">Send</button>
        </form>
    </main>
</body>
</html>