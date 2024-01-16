<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <style>
        a{
            color: brown;
            font-family: sans-serif;
            font-size: 20px;
        }
        ul{
            list-style: square;
        }
    </style>
</head>
<body>

        <ul>

            @guest
            <li><a href="register">Register</a></li>
            <li><a href="login">Login</a></li>
            @else
            <li><a href="logout">Log out</a></li>
            @endguest

            <li><a href="">view User Profile</a></li>
        </ul>

</body>
</html>
