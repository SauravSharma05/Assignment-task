<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }
        input{
            margin: 5px 10px;
            height: 30px;
            width: 60%;
        }
        button{
            border: none;
            background-color: green;
            color: white;
            border: 1px solid red;
            margin: 10px 10px;
            height: 25px;
            width: 100px;

        }
        fieldset{
            width: 50%;
            margin: 50px auto;
            background-color: none;
        }
        select{
            margin: 10px 10px;
            height: 25px;
        }
        a{
            background-color: black;
            color: whitesmoke;
            text-decoration: none;
            font-family: sans-serif;
            font-size: 30px;
        }
        </style>
</head>
<body>

        <a href="home">back to homepage</a>

    <fieldset>
        <legend>Login here</legend>
        <form action="" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="email@xyz.com"> <br>
        <input type="password" name="password" id="password" placeholder="enter password here"> <br>
        <button type="submit" name="log">Login</button>
    </form>

</fieldset>
</body>
</html>
