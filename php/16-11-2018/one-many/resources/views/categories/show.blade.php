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
    <h1> LARAVEL CRUD USERS DEMO </h1>
</div>
<div>
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Name</th><th class='text-center'>Title</th><th class='text-center'>Action</th></tr>
    <tr scope="row"><td>{{$category->id}}</td>
    <td>{{$category->name}}</td>
    <td>@foreach($category->post as $key => $post)
    {{$post->title}}
    @if($key !== (count($category->post) - 1))
    ,&nbsp;
    @endif
    @endforeach</td>
    <td class="d-flex align-items-center justify-content-around">
    <form action="{{asset('categories/'. $category->id.'/edit')}}" method="GET"><button class="btn btn-warning rounded-0">Edit</button>
    </form>
    <form action="{{asset('categories/'. $category->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger rounded-0">Delete</button></form>
    </td></tr>
</table>
</div>
</body>
</html>