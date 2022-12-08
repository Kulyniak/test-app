<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel project</title>
</head>
<body>
    <div class = "container">
        <h1>User Data Insert</h1>
        {$errors}
        <form action = "dataInsert" method = "post" enctype = "multipart/form-data" >
            @csrf

            <label for = "name" class = "control-label">Name:</label>
            <input type = "text" name ="name" class = "form-control"><br>
            <label for = "email" class = "control-label">Email:</label>
            <input type = "text" name ="email" class = "form-control"><br>
            <label for = "message" class = "control-label">Message:</label>
            <input type = "text" name ="message" class = "form-control"><br>
            <input type = "submit" class = "btn btn_primary">
        </form>
    </div>

</body>
</html>