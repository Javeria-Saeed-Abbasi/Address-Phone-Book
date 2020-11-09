<?php
require('../db/config.php');
session_start();
if(empty($_SESSION['username'])){
    header('location:login/login.php');
}
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
.dt-buttons{
    display: flex;
    justify-content: center;
}
.dt-button{
    border:transparent;
    color:white;
    border-radius:30%;
    padding:5px 10px 5px 10px;
    margin: 2px;
    background-color: #2c964c;
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
                    <div class="container" id="users-list">
                    <h1 class="text-center">User Requests</h1>
                    </div>
                    <!-- Search bar -->
                        <!-- <form class="form-inline my-2 my-lg-0">
                        <div class="input-group w-50 mx-auto">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                        </form> -->
                <!-- //Search bar ends-->
                    <br/><br/>
                    <!-- Buttons -->
                   
                    <div class="container">
                    <center>
                    <div class="btn-group   my-2 my-lg-0 ">
                    <!-- <a class="btn btn-light" href="newcontact.php" role="button">Add New User</a> -->
                    <!-- &nbsp;&nbsp;&nbsp; -->
                    <!-- <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Download
                    </button>
                    <div class="dropdown-menu" id="download-btn">
                        <a class="dropdown-item text-center" href="#">.CSV</a>
                        <a class="dropdown-item text-center" href="#">.XSL</a>
                    </div>
                    -->
                    <!-- //button group div -->
                    </div>                    
                    <a class="btn btn-danger" href="#" role="button"><i class="fa fa-trash"></i>  Delete All</a>
                    <a href="acceptedRequest.php" class="btn btn-success my-2">Accepted Request</a>
                    <a href="rejectedRequest.php"  class="btn btn-danger my-2">Rejected Request</a>
                    </center>
                    

</div>
              <!-- //jumbotorn ends div -->
                    </div>
                    <!-- <div class="container" id="users-list">
                    <h3 class="text-center">User Requests</h3>
                    </div> -->
                    <!-- Requests contact table -->
                    <div id="users-list" class="container shadow-lg pt-5 pb-5 bg-warning overflow-auto">
                    <table class="table table-striped table-responsive-sm w-auto" id="request-data">
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
                    <?php
                        $count= 1;
                        $query = "SELECT * from `requests`;";
                        $result = mysqli_query($dbConn,$query);
                        if ($result->num_rows > 0) {

                        while($rows= mysqli_fetch_array($result)){
                            if($rows['status'] == 'created'){

                            

                        ?>
                        <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <!-- <th scope="row"><?php echo $rows['id']; ?></th> -->
                        <td><?php echo $rows['username']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['phone']; ?></td>
                        <td><?php echo $rows['city']; ?></td>
                        <td><?php echo $rows['country']; ?></td>
                        <td><?php echo $rows['address']; ?></td>
                        <td><small><i><date><?php echo $rows['date']; ?></date></i></small></td>
                        <td><button class="btn btn-secondary my-2">Pending</button></td>

                        <td><a href="accept.php?id=<?php echo $rows['id'] ?> " name="acceptBtn" class="btn btn-success my-2">Accept</a></td>

                        <td><a href="reject.php?id=<?php echo $rows['id'] ?>"  class="btn btn-danger my-2">Reject</a></td>
                        
                        <td align="center">
							<a href="update-request.php?id=<?php echo $rows['id'] ?>" class="text-primary updateBtn"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
						    <a href="delete-request.php?id=<?php echo $rows['id'] ?>" name="deleteRequest" class="text-danger" onClick="return confirm('Are you sure to delete this user Request?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>
                        
                        </tr>
                        <?php
                      $count++;  }
                    }
                }
                else{
                    echo " ERROR: $dbConn->error ";
                }
                        ?>
                    </tbody>
                    
                    </table>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/6.1.0/jquery.mark.min.js"></script>

                    </div>
                    
              
        </div>


<?php
include('includes/footer.php');
?>
</body>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#request-data').DataTable({
       dom: 'Bfrtip',
      buttons: [
       'excel','csv','pdf'
    ]
    });

});
$(document).ready(function() {

// create a data table
var table = $('#request-data').DataTable();

// add custom listener to draw event on the table
table.on("draw",function() {
    // get the search keyword
    var keyword = $('#request-data_filter > label:eq(0) > input').val();

    // clear all the previous highlighting
    $('#request-data').unmark();

    // highlight the searched word
    $('#request-data').mark(keyword,{});
});

});
</script>
</html>