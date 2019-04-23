<!DOCTYPE html>
<html>
<head>
<title>Posts | Edit</title>
<style>
input[type=text], input[type=date]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #273746;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: 'Merienda', cursive;
  font-size: 16px;
}

input[type=submit]:hover {
  background-color: #4CAF50;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  font-family: 'Courgette', cursive;
  padding: 20px;
}
input[type=text]:focus {
  border: 3px solid #555;
}
textarea:focus {
  border: 3px solid #555;
}
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
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
  <li><a href="http://127.0.0.1:8000/articles">Articles</a></li>
  <li><a class="active" href="http://127.0.0.1:8000/edit-records">Edit Publications</a></li>
  <li><a href="http://127.0.0.1:8000/insert">Post Articles</a></li>
</ul>
<form action="/edit/<?php echo $users[0]->title; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
Title :
<input type = 'text' name = 'title' value = '<?php echo$users[0]->title; ?>'/> </br>
Tags :
<input type = 'text' name = 'tags' value = '<?php echo$users[0]->tags; ?>'/>
Published at :
<input type = 'date' name = 'postdate' value = '<?php echo$users[0]->postdate; ?>'/>
Content :
<input type = 'text' name = 'post' value = '<?php echo$users[0]->post; ?>'/>
<input type = 'submit' value = "Update" />
</form>
</body>
</html>
