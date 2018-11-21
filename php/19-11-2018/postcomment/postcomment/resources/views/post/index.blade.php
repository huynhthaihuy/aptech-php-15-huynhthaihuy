<!-- print data with array -->
@foreach($posts as $posts)
<div>
  {{$posts['id']}} - {{$posts['title']}} - {{$posts['description']}} - {{$posts['comment']['id']}} - {{$posts['comment']['description']}} </div>
  @endforeach