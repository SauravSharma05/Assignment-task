<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input page</title>
    <style>
        *{
            font-family: sans-serif;
        }
        .formy{
            width: 60%;
            margin: 50px auto;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            }
            a{
            text-decoration: none;
            font-size: 25px;
        }

    </style>
</head>

<body>
    <div class="formy">

         
        <fieldset>
            <legend>
        User Registration form
    </legend>
        <form  method="post" enctype="multipart/form-data">
            <br>
            <input type="text" name="name" id="" placeholder="Enter Employee Name"> <br><hr>
            <input type="email" name="email" id="" placeholder="Enter Your Email"> <br><hr>
            <input type="text" name="contact" id="" placeholder="Contact Number"> <br><hr>

            <label for="male">Male : </label>
            <input type="radio" name="gender" id="" value="male">
            <label for="male">Female : </label>
            <input type="radio" name="gender" id="female" value="female"> <br> <hr>

            <textarea name="address" id="address" cols="50" rows="5" placeholder="ADDRESS goes here"></textarea><br><hr>

            
            <label for="exp">Experience</label>
            <input type="number" name="exp" id="" > <br><hr>
            
            <label for="dept">Department</label>
            <select name="dept" id="dept">
                <option value="android">Android</option>
                <option value="Android">ASP Net</option>
                <option value="ios">IOS</option>
                <option value="php">PHP</option>
            </select>
            <hr>

            <label for="edu">Education</label>
            <select name="edu" id="edu">
                <option value="bca">BCA</option>
                <option value="be">BE</option>
                <option value="mba">MBA</option>
                <option value="mca">MCA</option>
            </select>
        <hr>

            <label for="hobby">Hobby : </label> <br>
            <label for="acting">acting : </label><input type="checkbox" name="hobby[]" value="acting" id="acting"> <br>
            <label for="cricket">cricket : </label><input type="checkbox" name="hobby[]" value="cricket" id="cricket"><br>
            <label for="cooking">cooking : </label><input type="checkbox" name="hobby[]" value="cooking" id="cooking"><br>
            <label for="dance">dance : </label><input type="checkbox" name="hobby[]" value="dance" id="dance"><br>
            <label for="hiking">hiking : </label><input type="checkbox" name="hobby[]" value="hiking" id="hiking"><br>
            <label for="photography">photography : </label><input type="checkbox" name="hobby[]" value="photography" id="photography"><br>
            <label for="reading">reading : </label><input type="checkbox" name="hobby[]" value="reading" id="reading"><br>
            <label for="surfing">surfing : </label><input type="checkbox" name="hobby[]" value="surfing" id="surfing"><br>
            <br><hr>


            <label for="photo">Profile photo</label>
            <input type="file" name="image" id=""><br><hr>

            <input type="submit" value="Register" name="submit">
        </form>
    </fieldset>

            <hr>
            <a href="userdata">click to get USER LIST</a>
            <hr>

</div>
    
</body>

</html>