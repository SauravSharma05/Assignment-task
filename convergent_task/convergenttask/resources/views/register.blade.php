<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            width: 60%;
            margin: 20px auto;
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

        <div class="formbox">
            <fieldset>
                <legend>Registration form</legend>
                <form action="" method="post">
                @csrf
                <input type="text" name="name" id="name" placeholder="enter name here"> <br>
                <input type="text" name="surname" id="surname" placeholder="enter surname here"> <br>
                <input type="email" name="email" id="email" placeholder="email@xyz.com"> <br>
                <input type="text" name="phone" id="phone" placeholder="phone"> <br>
                <input type="text" name="address" id="address" placeholder="address goes here"> <br>
                <input type="text" name="pin" id="pin" placeholder="pincode"> <br>

                <input type="password" name="password" id="password" placeholder="enter password here"> <br>
                <input type="confpass" name="confpass" id="confpass" placeholder="confirm your password"> <br>

                <select name="state" id="state">
                    <option value="Gujarat">Gujarat</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Karnataka">Karnataka</option>
                </select> <br>

                <select name="city" id="city">
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Bhopal">Bhopal</option>
                    <option value="Bangalore">Bangalore</option>
                </select> <br>
                <button type="submit" name="reg">Register</button>
            </form>

        </fieldset>
    </div>
    </body>
</html>
<script>

btn = $('button')

btn.click( ()=>
{

if(input.val(""))
{
    alert("Require...!")
}
})

    </script>
