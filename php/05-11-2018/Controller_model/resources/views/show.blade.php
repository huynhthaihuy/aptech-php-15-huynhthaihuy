<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="Header container text-center">
    <h1> LARAVEL CRUD USERS DEMO </h1>
</div>
<div>
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Name</th><th class='text-center'>Email</th><th class='text-center'>Action</th></tr>
@foreach($users as $users)
    <tr class="text-center"><td>{{$users->ID}}</td>
    <td>{{$users->Name}}</td>
    <td>{{$users->Email}}</td>
    <td class="d-flex align-items-center justify-content-around">
    <form action="{{ $user->id.'/edit' }}" method="get"><button class="btn btn-warning rounded-0">Edit</button>
    </form>
    <form action="welcome" method="get"><button type="submit" class="btn btn-danger rounded-0">Delete</button></form>
    </td></tr>
@endforeach
</table>
</div>
</body>
</html>