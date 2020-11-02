
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Landing Page</title>
</head>
<body>
 <?php
 require('navbar.php');
 ?>
 <!-- Search bar -->
<br/>
 <form class="form-inline my-2 my-lg-0" action="./searchedlist.php" role="search" method="POST">
 <div class="input-group w-50 mx-auto">
    <input type="search" class="form-control" name="txtSearch"  placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-secondary" name="bntSearch" type="submit">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
  </form>
  
  <?php
 include('slider.php');
 include('services.php');
 include('demolist.php');
 include('footer.php');
 ?>


</body>
</html>