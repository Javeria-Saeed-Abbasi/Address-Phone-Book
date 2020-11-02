<?php
require_once ('db/config.php');
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

    <title>Searched</title>
    <style>
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
<!-- contact table -->
<div class="container shadow-lg pt-5 pb-5">
                    <table class="table table-striped table-responsive-sm" id="contacts">
                    <thead class="bg-warning text-secondary">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <!-- <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th> -->
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                        <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //  $_SESSION['user-id'] = $userID;
                        // $query = "select * from `users_contact` where `user-id` = '$userID'; ";
                        $count= 1;
                        $reset="";
                        if(isset($_POST['bntSearch']))
                       {
                        $search= $_POST['txtSearch'];
                        $search = preg_replace("#[^0-9a-z]#i","",$search );
                        $query ="SELECT * from `users_contact` WHERE `first-name` LIKE '%$search%' OR  `last-name`  LIKE '%$search%' OR `city` LIKE '%$search%' OR  `country` LIKE '%$search%' ; ";
                       }
                       else{
                           echo " ERROR: " .$dbConn->error;
                       }
                        $result = mysqli_query($dbConn,$query);
                        if ($result->num_rows > 0) {
                        while($rows= mysqli_fetch_array($result)){

                        ?>
                        <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <!-- <th scope="row"><?php echo $rows['id']; ?></th> -->
                        <td><?php echo $rows['first-name']; ?></td>
                        <td><?php echo $rows['last-name']; ?></td>
                        <!-- <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['phone']; ?></td>
                        <td><?php echo $rows['address']; ?></td> -->
                        <td><?php echo $rows['city']; ?></td>
                        <td><?php echo $rows['country']; ?></td>
                        <!-- <td align="center">
							<a href="editcontact.php?id=<?php echo $rows['id'] ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="crud-contacts/deleteContact.php?id=<?php echo $rows['id'] ?>" class="text-danger" onClick="return confirm('Are you sure to delete this contact?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
						</td> -->
                        </tr>
                        <?php
                         $count++;}
                    }
                        ?>
                    </tbody>
                    
                    </table>
                    </div>
                    
     <?php
    include('includes/footer.php');
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- Include jquery mark ( for highlighting text )-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/6.1.0/jquery.mark.min.js"></script>

<!-- Include Data Tables-->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> -->
<!-- CSS -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
<!-- JS -->
 <!-- Some custom js -->
 <script type="text/javascript">//<![CDATA[
        
        $(document).ready(function() {

            // create a data table
            var table = $('#contacts').DataTable();

            // add custom listener to draw event on the table
            table.on("draw",function() {
                // get the search keyword
                var keyword = $('#contacts_filter > label:eq(0) > input').val();

                // clear all the previous highlighting
                $('#contacts').unmark();

                // highlight the searched word
                $('#contacts').mark(keyword,{});
            });

        });

    //]]> 
</script>
</html>
