
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    <title>Navbar</title>
<style>
#first-nav .nav-item{
  color: white;
}

    </style>
</head>
<body>
<header class="sticky-top" id="first-nav">
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3488fc;">
  <a class="navbar-brand" href="index.php"><img src="images/logocopy.png" height="50px" alt="My responsive image."/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0"> -->
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <a href="login/login.php"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Login</button></a>
    <!-- </form> -->
  </div>
</nav>
</header>
<!-- Search bar -->
<br/>
 <form class="form-inline my-2 my-lg-0">
 <div class="input-group w-50 mx-auto">
    <input type="search" class="form-control" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
  </form>
 
</body>
</html>