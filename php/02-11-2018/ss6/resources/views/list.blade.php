<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class = 'w-100'>
<table class="table table-bordered table-hover"><tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
@foreach($users as $users)
    <tr><td>{{$users->ID}}</td>
    <td>{{$users->Name}}</td>
    <td>{{$users->Email}}</td>
    <td><button type='submit' class='btn btn-warning'>Show</button><button type='submit' class='btn btn-danger'>Edit</button><button type='submit' class='btn btn-warning'>Delete</button></td></tr>
@endforeach
</table>
</div>
</body>
</html>