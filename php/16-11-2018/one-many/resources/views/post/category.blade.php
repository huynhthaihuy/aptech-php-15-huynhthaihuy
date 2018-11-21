<!-- print data with array -->
@foreach($categories as $categories)
<div>
  {{$categories['id']}} - {{$categories['name']}} - {{$categories['post']['id']}} - {{$categories['post']['title']}} </div>
  @endforeach