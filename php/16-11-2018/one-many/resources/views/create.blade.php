<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="Header container text-center">
    <h1> LARAVEL CRUD USERS CREATE</h1>
</div>
<div class="align-items-center">
<form action="{{asset('users')}}" method="POST">
{{csrf_field()}}
    <div class="form-group ">
    Title: <input type="text" name="title" placeholder="input name"><br>
    </div>
    <div class="form-group ">
    Description: <input type="text" name="description" placeholder="input description"><br>
    </div>
    <div class="form-group ">
    Content: <input type="text" name="content"><br>
    </div>
    <div class="form-group ">
    Category_id: <input type="text" name="category_id"><br>
    </div>
    <div class="form-group ">
    Name: <input type="text" name="name"><br>
    </div>
    <div class="form-group ">
    <button type="submit">Confirm</button>
    </div>
</form>
</div>
</body>
</html>