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
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: 'Merienda', cursive;
  font-size: 14px;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
  <ul>
  <li><a href="http://127.0.0.1:8000/home">Home</a></li>
  <li><a class="active" href="http://127.0.0.1:8000/articles">Articles</a></li>
  <li><a href="http://127.0.0.1:8000/edit-records">Edit Publications</a></li>
  <li><a href="http://127.0.0.1:8000/insert">Post Articles</a></li>
</ul>
@foreach ($users as $user)
<div>
{{$user->title}}<br>
<p style="font-size:15px;">{{$user->tags}}<br>
{{$user->postdate}}</p><hr>
{{$user->post}}<br>
</div>
@endforeach

</body>
</html>
