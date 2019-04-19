<!Doctype html>
<html>
<head>
<title>Posts</title>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<style>
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  font-family: 'Courgette', cursive;
  padding: 29px;
  margin-bottom: 17px;
  font-size: 18px;
}
</style>
</head>
<body>
@foreach ($users as $user)
<div>
{{$user->title}}<br>
{{$user->tags}}<br>
{{$user->postdate}}<br>
{{$user->post}}<br>
<a href='edit/{{ $user->title }}'>Edit</a><br>
<a href='delete/{{ $user->title }}'>Delete</a><br>
</div>
@endforeach

</body>
</html>
