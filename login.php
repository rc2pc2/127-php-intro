<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <main>
        <h1>
            Login
        </h1>

        <form action="./profile.php" method="POST">
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </div>

            <div>
                <label for="username">Password: </label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">
                Login
            </button>
        </form>
    </main>
    
</body>
</html>