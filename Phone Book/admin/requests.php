<?php
require('../db/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Font Awsome cdn link -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Requests Page</title>
<style>
#download-btn a:hover{
    background-color:#3488fc;
    color:#fff;
}
</style>
</head>
<body>

<?php
include('includes/navbar.php');
?>
<!-- ================================= Section =============================== -->


<?php
include('includes/sidewrapper.php');
?>
        <!-- ================ Content Div ==================== -->
        <div class="col-8 col-md-10 col-lg-10 pt-2 bg-light overflow-auto" style="max-height:460px;">
                    <div class="container jumbotron bg-primary shadow-lg w-100" >
                    <!-- Search bar -->
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
                <!-- //Search bar ends-->
                    <br/><br/>
                    <!-- Buttons -->
                   
                    <div class="container">
                    <center>
                    <div class="btn-group   my-2 my-lg-0 ">
                    <!-- <a class="btn btn-light" href="newcontact.php" role="button">Add New User</a> -->
                    <!-- &nbsp;&nbsp;&nbsp; -->
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Download
                    </button>
                    <div class="dropdown-menu" id="download-btn">
                        <a class="dropdown-item text-center" href="#">.CSV</a>
                        <a class="dropdown-item text-center" href="#">.XSL</a>
                    </div>
                   
                    <!-- //button group div -->
                    </div>                    
                    <a class="btn btn-danger" href="#" role="button"><i class="fa fa-trash"></i>  Delete All</a>
                    </center>

</div>
              <!-- //jumbotorn ends div -->
                    </div>
                    <div class="container" id="users-list">
                    <h3 class="text-center">User Requests</h3>
                    </div>
                    <!-- Requests contact table -->
                    <div class="container shadow-lg pt-5 pb-5 bg-warning overflow-auto">
                    <table class="table table-striped table-responsive-sm w-auto">
                    <thead class="bg-primary text-white">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Reject</th>
                        <th scope="col">Action</th>
                        
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td><small><i><date>10-Sep-2020</date></i></small></td>
                        <td><button class="btn btn-secondary my-2">Pending</button></td>

                        <td><button class="btn btn-success my-2">Accepted</button></td>

                        <td><button class="btn btn-danger my-2">Rejected</button></td>

                        <td align="center">
							<a href="editcontact.php" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="#" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>
                        
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>

                    </div>
                    
              
        </div>


<?php
include('includes/footer.php');
?>
</body>
</html>