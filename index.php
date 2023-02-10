<!DOCTYPE html>
<html>

<?php
	include('header.php');
?>

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/a20af99601.js" crossorigin="anonymous"></script>
    <title>Sport Ringer | Main</title>
</head>
<body>

	    <div id="slides" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#slides" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item item active">
            <img src="img/slide_2.jpg" class="d-block w-100" alt="231">
            <div class="carousel-caption">
              <h5>Easy Sporting Access</h5>
              <p>We are making this management system to make the sporting activities easy,fast and effective so that students of SEC can register 
                for any sports event online</p>
            </div>
          </div>
          <div class="carousel-item item">
            <img src="img/slide_1.jpg" class="d-block w-100" alt="113">
            <div class="carousel-caption">
              <h5>Friendly Enviroment</h5>
              <p>We provied a friendly sporting enviroment for the players.</p>
            </div>
          </div>
          <div class="carousel-item item">
            <img src="img/slide_3.jpg" class="d-block w-100" alt="159">
            <div class="carousel-caption">
              <h5>SignUp Now</h5>
              <p>Register into a programm and get a chance to win free Cricket ticket to the Intercollege Cricket Tornament.<br><center><bold>25<sup>th</sup>Feb 2022</bold></center></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

</body>
	
<?php
	include('footer.php');
?>

</html>