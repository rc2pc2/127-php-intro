<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
</head>
<body>
    <main>
        <!-- //! se non esiste username ritorna a login con un errore -->
        <h1>
            Profile page
        </h1>
        <h2>
            Welcome <?php echo $_POST["username"] ?>!
            La tua password sicurissima e' <?php echo $_POST["password"] ?>!
        </h2>
    
    </main>

    
</body>
</html>