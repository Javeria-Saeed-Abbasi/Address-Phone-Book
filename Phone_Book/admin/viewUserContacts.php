<?php
   session_start(); //we need session for the log in thingy XD 
include('../db/config.php');

   

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
    <title>Admin Dashboard</title>
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
 /* for highlighted records of search */
 mark {
        background-color:yellow;
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
                    <div class="container">

                    <h1 class="text-center">Contact List of Username</h1>
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
                    
                    <!-- Buttons -->
                   
                    <div class="container">
                    <center>
                    <div class="btn-group pt-5  my-2 my-lg-0 ">
                    <?php
                        $id = $_GET['id'];
                        //   var_dump($id);
                        $query = "SELECT * FROM `registered_users` WHERE `id` = $id ;";
                        $result = mysqli_query($dbConn,$query);
                        if ($result->num_rows > 0) {
                        while($rows= mysqli_fetch_array($result)){

                        ?>
                    <form method="POST" action="addNewContact.php?id=<?= $id; ?>">
                    <!-- <input type="hidden" name="id" value="<?php echo $rows['user-id']; ?>" /> -->
                    <a class="btn btn-light" href="addNewContact.php?id=<?php echo $rows['id'] ?>" type="button" >Add New Contact</a>
                    <?php
                        }
                        
                        }
                        ?>
                    </form>

   
                    &nbsp;&nbsp;&nbsp;
                    <!-- <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Download
                    </button>
                    <div class="dropdown-menu" id="download-btn">
                        <a class="dropdown-item text-center" href="#">.CSV</a>
                        <a class="dropdown-item text-center" href="#">.XSL</a>
                    </div> -->
                   
                    <!-- //button group div -->
                    </div>
                    <br/>
                    
                    <!-- <a class="btn btn-danger mt-3" href="#" role="button"><i class="fa fa-trash"></i>  Delete All</a> -->
                    </center>

</div>
              <!-- //jumbotorn ends div -->
                    </div>
                    
                    <!-- contact table -->
                    <div id="users-list" class="container shadow-lg pt-5 pb-5">
                    <table class="table table-striped table-responsive-sm" id="users-contacts-data">
                    <thead class="bg-primary text-white">
                        <tr>
                        <th scope="col">#</th>
                        <!-- <th scope="col">user-id</th> -->
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                        <th scope="col">Action</th>
                        
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $id = $_GET['id'];
                        //   var_dump($id);
                        $count= 1;
                        $query = "SELECT * FROM `users_contact` WHERE `user-id` = $id ;";
                        $result = mysqli_query($dbConn,$query);
                        if ($result->num_rows > 0) {
                        while($rows= mysqli_fetch_array($result)){

                        ?>
                        <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <!-- <th scope="row"><?php $rows['user-id']; ?></th> -->
                        <!-- <th scope="row"><?php echo $rows['id']; ?></th> -->
                        <td><?php echo $rows['first-name']; ?></td>
                        <td><?php echo $rows['last-name']; ?></td>                        
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['phone']; ?></td>
                        <td><?php echo $rows['address']; ?></td>
                        <td><?php echo $rows['city']; ?></td>
                        <td><?php echo $rows['country']; ?></td>

                        <!-- <td align="center">
							<a href="#" class="text-primary"><i class="fa fa-fw fa-eye"></i>View</a>
						</td> -->
                        <td align="center">
                            <!-- <a href="addNewContact.php?id?id=<?php echo $rows['id'] ?>" class="text-primary"><i class="fa fa-fw fa-plus"></i> Add</a> |  -->
							<a href="updateUserContact.php?id=<?php echo $rows['id'] ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="deleteUserContact.php?id=<?php echo $rows['id'] ?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>
                        
                        </tr>
                        <?php
                        $count++;}
                        
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
    </div>
    
</div>
<?php
include('includes/footer.php');
?>
</body>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#users-contacts-data').DataTable({
       dom: 'Bfrtip',
      buttons: [
        'excel','csv','pdf'
    ]
    });

});
$(document).ready(function() {

// create a data table
var table = $('#users-contacts-data').DataTable();

// add custom listener to draw event on the table
table.on("draw",function() {
    // get the search keyword
    var keyword = $('#users-contacts-data_filter > label:eq(0) > input').val();

    // clear all the previous highlighting
    $('#users-contacts-data').unmark();

    // highlight the searched word
    $('#users-contacts-data').mark(keyword,{});
});

});
</script>
</html>