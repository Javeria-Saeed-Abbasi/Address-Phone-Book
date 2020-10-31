<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard Navbar</title>
</head>
<body>
<header class="sticky-top" id="first-nav">
 <nav class="navbar navbar-expand navbar-dark " style="background-color: #3488fc;"> 
  <!-- <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a>  -->
  <a class="navbar-brand" href="../index.php"><img src="../images/logocopy.png" height="50px" alt="My responsive image."/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Username</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a href="#" class="dropdown-item">Reports</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div> -->
                        <a href="includes/logout.php?logout=true"class="dropdown-item">Logout</a>
                    </div>
                </li>
           </ul>

            </div>
        </nav>
</header>

</body>
<!-- <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script> -->
</html>