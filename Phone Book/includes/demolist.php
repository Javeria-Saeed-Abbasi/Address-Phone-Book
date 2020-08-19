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

    <title>Demo Contact List</title>
    <style>
      #demo-main{
        background: rgb(34,42,235);
background: linear-gradient(0deg, rgba(34,42,235,1) 21%, rgba(17,101,232,1) 42%, rgba(86,170,247,1) 91%);
      }
        .blue-line{
    width: 6%;
    position: relative;
    margin: 10px;
    border-bottom: 1px solid  #2bb6ed;
}
#demo-main tbody{
  color: white;
}
#demo-main thead{
  background: orange;
}
#demo-main td img{
  border-radius: 50%;
}
  </style>
  </head>
  <body>
    <br/>
    <h2 class="text-center text-uppercase text-primary">CONT<span class="text-success">ACTS</span></h2>
    <center>
      <div class="title-icon d-flex justify-content-center"><hr class="blue-line"/><img src="../images/notelist.png" height="40px;"/><hr class="blue-line"/>
      </div>
    </center>
    <br/>
    <!-- Contactlist demo Table  -->
    <div class="container" id="demo-main">
    <table class="table">
      <thead class="thead">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Avatar</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><img src="images/img_avatar_man.png" width="50px" height="50px"/></td>
          <td>Mark</td>
          <td>0347689600</td>
          <td>@mdo</td>
          <td><address>ABC Block 123, Street</address></td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td><img src="images/img_avatar_man.png" width="50px" height="50px"/></td>
          <td>Jacob</td>
          <td>0347689600</td>
          <td>@fat</td>
          <td><address>ABC Block 123, Street</address></td>

        </tr>
        <tr>
          <th scope="row">3</th>
          <td><img src="images/img_avatar_woman.png" width="50px" height="50px"/></td>
          <td>Larry</td>
          <td>0347689600</td>
          <td>@twitter</td>
          <td><address>ABC Block 123, Street</address></td>

        </tr>
        <tr>
          <th scope="row">4</th>
          <td><img src="images/img_avatar_woman.png" width="50px" height="50px"/></td>
          <td>Larry</td>
          <td>0347689600</td>
          <td>@twitter</td>
          <td><address>ABC Block 123, Street</address></td>

        </tr>
      </tbody>
    </table>
    
    
  </div>
  </body>
  </html>