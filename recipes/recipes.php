<html>
<head>
    <title>Tasty Therapy</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}

.w3-bar .w3-button {
    padding: 16px;
}
.a:hover, a:link{
  text-decoration: none;
}
</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
          <a href="../index.html" class="w3-bar-item w3-button w3-wide">HOME</a>
          <!-- Right-sided navbar links -->
          <div class="w3-right w3-hide-small">
            <a href="../index.html#about" class="w3-bar-item w3-button"><i class="fas fa-question"></i> ABOUT</a>
            <a href="../recipes/recipes.php" class="w3-bar-item w3-button"><i class="fas fa-utensils"></i></i></i> RECIPES</a>
            <a href="../index.html#team" class="w3-bar-item w3-button"><i class="fas fa-concierge-bell"></i></i> CHEFS</a>
            <a href="../index.html#work" class="w3-bar-item w3-button"><i class="fab fa-blogger-b"></i></i> BLOG</a>
            <a href="../index.html#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
            <a href="../login/register.php" class="w3-bar-item w3-button"><i class="fas fa-user-circle"></i> LOGIN | REGISTER</a>
          </div>
          <!-- Hide right-floated links on small screens and replace them with a menu icon -->
      
          <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </div>
      
      <!-- Sidebar on small screens when clicking the menu icon -->
      <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="../index.html#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="../index.html#team" onclick="w3_close()" class="w3-bar-item w3-button">RECIPES</a>
        <a href="../recipes/recipes.php" onclick="w3_close()" class="w3-bar-item w3-button">CHEFS</a>
        <a href="../index.html#work" onclick="w3_close()" class="w3-bar-item w3-button">BLOG</a>
        <a href="../index.html#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
        <a href="../login/register.php" onclick="w3_close()" class="w3-bar-item w3-button"> LOGIN | REGISTER</a>
      </nav>
</div>

</body>
</html>