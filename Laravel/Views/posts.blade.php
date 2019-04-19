<!DOCTYPE html>
<html>
<head>
<title>Post article</title>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
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
</style>
</head>
<body>
<div>
  <form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <label for="title">Title :</label>
    <input type='text' name='title' /><br>
    <label for="tags">Tags :</label>
    <input type="text" name='tags'/><br>
    <label for="post">Content :</label>
    <textarea name="post"></textarea><br>
    <label for="date">Publishing on : </label>
    <input type="date" name="postdate"><br><br><hr>
    <input type = 'submit' value = "Post"/>
  </form>
</div>
</body>
</html>
