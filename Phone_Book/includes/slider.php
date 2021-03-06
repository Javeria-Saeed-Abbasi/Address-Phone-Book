<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Slider</title>
</head>
<body>
<div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.png" alt="First Slide" class="img-fluid">
                <!-- <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>First slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="images/banner2.png" alt="Second Slide" class="img-fluid">
                <!-- <div class="carousel-caption d-none d-md-block text-dark" >
                    <h5>Second slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="images/banner3.png" alt="Third Slide" class="img-fluid">
                <!-- <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>First slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div> -->
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev " href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
</script>
</body>

<script>
$(document).ready(function(){
        $("#myCarousel").carousel();
});
</script>
</html>