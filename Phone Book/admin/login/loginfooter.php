<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}


#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}

#footer h6 {
  color: #ccc;
}

#footer p {
  color: #ccc;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
  
}
#footer ul.social li a i {
  margin-right: 5px;
	font-size:15px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
  transition: .5s all ease;
  background-color: #3b70eb;
  padding:10px;
  border-radius:25px 25px 25px 25px;
  text-align: center;
  /* line-height: 100px; */
  vertical-align: middle;


}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
 
}
#footer ul.quick-links li a{
  color: #ccc;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}
#footer #phone-col li a i{
  color: #0bad21;
}
@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

#footer-last{
    background-color:#3488fc;
}

/* =====================================FOOTER ENDS================================== */

    </style>
</head>
<body>
      <!--========================== Footer ======================================-->
      <div class="container-fluid  bg-dark">
        <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">

				<div class="col-xs-12 col-sm-4 col-md-4">
                    <img src="../images/logocopy.png" width="120px" height="100px" />
                    <br/><br/>   
          <h5>About</h5>
          <p>The “KONTACT”  will provide a complete solution to the management of personal contacts for people belonging to all age groups and all types of professions</p>
					<!--  -->
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Pages</h5>
          <hr class="mission-hr"/>
					<ul class="list-unstyled quick-links">
						<li><a href="../index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="../about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="../contactus.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>

					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Feed Back </h5>
                    <ul class="list-unstyled">
                        <li>
                            <form>
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="text-white">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="text-white">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                    
                       
                      </ul>
				</div>
      </div>
    </div>
  </section>
                
     			<div class="row text-white text-center" id="footer-last">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
          <div class="container">
            <h4>Developed by: (Bc170200029) Javeria Saeed Abbasi</h4>
            <h5>Final Year Project 2020</h5>
            <h6><img src="../images/vu.png" width="70px" height="50px"/> Virtual University Of Pakistan</h6>
          </div>
				</div>
				<hr>
            </div>	
        
    
		
	
	<!-- ./Footer -->

	
</div>
	<!-- ./Footer -->
</body>
</html>