@foreach ($user->posts as $userposts)
  <h1>{{$userposts->title}}</h1>
<hr>
@endforeach
