<?php
require('../db/config.php');
session_start();
include('../db/config.php');
if(empty($_SESSION['username'])){
    header('location:../login/login.php');
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
	<title>Edit Contact</title>
	<style>
		#edit-contact label {
	color: #3488fc;
	font-weight:bold;
  }
		</style>
</head>
<body>
	<?php include('includes/navbar.php'); ?>


		<!-- ================ Content Div ==================== -->
                    
<div class="card" >
			<div class="card-header">
				<strong >Contact of First Name</strong>
				<a href="index.php" class="float-right btn btn-dark btn-sm">
				<i class="fa fa-fw fa-globe"></i>	Contact List</a>
			 </div>
			<div class="card-body ">
				
				<div class=" col-6 col-sm-6 col-md-6 mx-auto" id="edit-contact">
					<!-- <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5> -->
					<?php
				$id = $_GET['id']; 
				$query="SELECT * FROM `users_contact` WHERE id='.$id.'; ";
				$results = mysqli_query($dbConn, $query);
				while($rows = mysqli_fetch_array($results))
				{
  					?>
					<form method="post" action="crud-contacts/update-Contact.php" >
					<!-- <input type="hidden" name ="contact_id" value= "<?php echo $rows['id'];?>"><br> -->
						<div class="form-group ">
							<label>First Name <!---<span class="text-danger">*</span>----></label>
							<input type="text" name="updateFirstname" id="firstname" class="form-control" value="<?php echo $rows['first-name']; ?>" placeholder="Enter first name" required>
						</div>
						<div class="form-group ">
							<label>Last Name <!---<span class="text-danger">*</span>----></label>
							<input type="text" name="updateLastname" id="lastname" class="form-control" value="<?php echo $rows['last-name']; ?>" placeholder="Enter last name" required>
						</div>
						<div class="form-group">
							<label>Email<!---<span class="text-danger">*</span>----></label>
							<input type="email" name="updateEmail" id="email" class="form-control" value="<?php echo $rows['email']; ?>" placeholder="Enter email" >
						</div>
						<div class="form-group">
							<label>Phone <!---<span class="text-danger">*</span>----></label>
							<input type="tel" name="updateUserphone" id="userphone" maxlength="12" class="form-control" value="<?php echo $rows['phone']; ?>" placeholder="Enter phone" >
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" name ="updateAddress" class="form-control" id="inputAddress" value="<?php echo $rows['address']; ?>" placeholder="1234 Main St">
						</div>
						<div class="form-group">
							<label for="inputCity">City</label>
							<input type="text" name ="updateCity" class="form-control" value="<?php echo $rows['city']; ?>"  id="inputCity" placeholder="Karachi">
						</div>
						<div class="form-group ">
							<label for="inputCountry">Country</label>
							<input type="text" name ="updateCountry" class="form-control" value="<?php echo $rows['country']; ?>"  id="inputCountry" placeholder="Pakistan">
						</div>
						
					
						<div class="form-group">
							<!-- <input type="hidden" name="editId" id="editId" value="<?php echo $_REQUEST['editId']?>"> -->
							<button type="submit" value="<?php echo $rows['id']; ?>"  name="updateContact" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Update Contact</button>
							<br/><br/><br/>
							<center><a href="index.php">Back to Contact List</a><center>
						</div>
						<?php
						}
						?>
					</form>
					
				</div>
				
			</div>
		</div>
	</div>

	<!-- ==================== FOOTER ============================ -->
	<?php include('includes/footer.php'); ?>
</body>
</html>