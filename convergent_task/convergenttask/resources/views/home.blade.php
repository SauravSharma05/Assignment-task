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
        .profile{
            border: 1px solid brown;
            width: 40%;
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.886);
            color:white;
            height: 300px;
            padding: 50px 20px;
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

        </ul>

        @foreach ($profiledata as $value)
        <div class="profile">
            <div class="prof">Name : {{ $value->name }}</div>
            <div class="prof">Email : {{ $value->email }}</div>
            <div class="prof">City : {{ $value->city }}</div>
            <div class="prof">State : {{ $value->state }}</div>
            <div class="prof">Pincode : {{ $value->pin }}</div>
            <div class="prof">Phone number : {{ $value->phone }}</div>
            <div class="prof">Address : {{ $value->address }}</div>
        </div>
        @endforeach
      


</body>
</html>
