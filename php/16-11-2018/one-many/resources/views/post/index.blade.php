<!-- print data with array -->
@foreach($posts as $posts)
<div>
  {{$posts['id']}} - {{$posts['title']}} - {{$posts['description']}} - {{$posts['category']['id']}} - {{$posts['category']['name']}} </div>
  @endforeach