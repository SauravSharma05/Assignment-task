<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdata</title>
    <style>
        *{
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table{
            border: 1px solid black;
            margin: 0 auto;
            width: 80%; 
         }
        tr,th{
            border: 1px solid black;
            width: 25%;
        }
        
        a{
            text-decoration: none;
            background-color: black;
            color: whitesmoke;
            font-size: 25px;
            margin-left: 600px;
            
        }
    </style>
</head>
<body>
            <hr>
            <a href="index">BACK TO HOME</a>
            <hr>

                <table>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Gender</th>
                        <th>Number</th>
                    </tr>
                <?php foreach ($userdata as $value) { ?>
                    <tr>
                            <th><?php echo "<img src='$value->image' alt='' height='100px' width='100px'>" ?></th>
                            <th><?php echo $value->name ?></th>
                            <th><?php echo $value->dept ?></th>
                            <th><?php echo $value->gender ?></th>
                            <th><?php echo $value->contact ?></th>
                            <th>
                        </tr>
                    <?php } ?>
                </table>
</body>
</html>