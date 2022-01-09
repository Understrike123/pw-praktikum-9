<!DOCTYPE html>
<html lang=eng>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=s
    wap" rel="stylesheet">

    <style>
        label{
            display: block;
        }
    </style>
    <title>Register page</title>
</head>
<body>
    <h1>Register</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password: ></label>
                <input type="password" name="password" id="password">
            
            </li>
            <li>
                <label for="conf_password">Confirm password: ></label>
                <input type="password" name="conf_password" id="conf_password">
            
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>