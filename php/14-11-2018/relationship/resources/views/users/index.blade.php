<!-- print data with array -->
@foreach($users as $user)
<div>
  {{$user['id']}} - {{$user['name']}} - {{$user['phone']['number']}} </div>
  @endforeach