<!DOCTYPE html>
<html>
<title>Blogger</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
#ulx {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

#lix {
  float: left;
}

#lix a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: 'Merienda', cursive;
  font-size: 14px;
}

#lix a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32">
  <h1><b>BLOGGER</b></h1>
  <p>Welcome to the <span class="w3-tag">blog</span></p>
</header>
<ul id="ulx">
<li id="lix"><a class="active" href="#home">Home</a></li>
<li id="lix"><a href="http://127.0.0.1:8000/articles">Articles</a></li>
<li id="lix"><a href="http://127.0.0.1:8000/edit-records">Edit Publications</a></li>
<li id="lix"><a href="http://127.0.0.1:8000/insert">Post Articles</a></li>

</ul>
<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="https://www.einsteincollege.vic.edu.au/blog/images/blog-banner.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Blogger</b></h3>
      <h5>Description</h5>
    </div>

    <div class="w3-container">
      <p>A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries. Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page</p>
      <div class="w3-row">
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="https://www.craskills.in/wp-content/uploads/2018/02/Blog_Banner-Mediation.png" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>BLOG ENTRY</b></h3>
      <h5>Laravel <span class="w3-opacity">April 22, 2019</span></h5>
    </div>

    <div class="w3-container">
      <p>Taylor Otwell created Laravel as an attempt to provide a more advanced alternative to the CodeIgniter framework, which did not provide certain features such as built-in support for user authentication and authorization.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border" onclick="window.location.href = 'http://127.0.0.1:8000/articles';"><b>READ MORE »</b></button></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="http://www.neverskip.com/images/admin/admin_banner.png" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Author</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
  </div><hr>

  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="https://www.w3schools.com/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li>
      <li class="w3-padding-16">
        <img src="https://www.w3schools.com/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li>
      <li class="w3-padding-16">
        <img src="https://www.w3schools.com/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="https://www.w3schools.com/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>
    </ul>
  </div>
  <hr>

  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>

<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

</body>
</html>
