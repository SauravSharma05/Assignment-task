<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>

    <form action="" method="post" id="taskform">
        <input type="text" name="taskname" id="taskname" for="taskname" placeholder="enter task here">  
        <button type="submit" name="add">
            add task
        </button>
    </form>


    <hr>
 
    
</body>
</html>

<script>
  $('#taskform').submit(function(evt) {
    evt.preventDefault();
    let FormData = $(this).serializeArray()
    FormDataObject = {}
    FormData.forEach(element => {
        FormDataObject[element.name] = element.value;
    });
    
    fetch("http://localhost/assigment_techlithic/Assignment-task/to%20do%20task/home.php", {
        headers: {  
            "Content-Type": "application/x-www-form-urlencoded",
            "Accept": "application/json"
        },
        method: 'POST',
        body: JSON.stringify(FormDataObject)
    }).then((response)=>response.json()).then((result)=>{
        console.log(result);

        if (result.Code == 1) {
                window.location.href = "home.php"
            } else {
                alert("error while inserting data")
            }
    })
});
</script>