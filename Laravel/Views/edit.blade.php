<!DOCTYPE html>
<html>
<head>
<title>Posts | Edit</title>
</head>
<body>
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
