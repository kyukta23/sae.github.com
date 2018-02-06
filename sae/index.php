<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <?php
  $dir    = 'images/slider';
  $files1 = scandir($dir);
  $dir2    = 'images/trinity';
  $files2 = scandir($dir2);
  ?>
  <script type="text/javascript">var source=<?php echo json_encode($files1); ?>;var trinity=<?php echo json_encode($files2); ?>;</script>
  <style type="text/css">
</style>
</head>
<body>
  <?php include'php/header.php';?>
  <div class="sliderMain container">  
    <div id="myCarousel" class="sliderMain carousel slide" data-ride="carousel">
      <div class="sliderMain headSlider carousel-inner">
        <div class="sliderMain item active">
          <img src="images/1.jpg" alt="Los Angeles">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container">
    <h2 class="headings">About US</h2>
    <div class="panel panel-default">
      <div class="panel-body">this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .this is about us .</div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 animated pulse infinite"><h1 class="headings"><b>The TRINITY</b></h1><br><br> </div>
    </div>
  </div>

  <div class="fullwidth container">
    <div class="row">
      <div class="col-sm-4 t1">
        <div class="centerAlign iconTeam circle effect13 bottom_to_top">
          <a href="#">
            <div class="img" id="trinity1"></div>
            <div class="info">
              <div class="info-back">
                <h3>TEAM ACCELERONS</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </a>
          <h1 class="underImg">abcdefghijklmnon<br>(989679013)</h1>
        </div>
      </div>
      <div class="col-sm-4 t2">
        <div class="centerAlign iconTeam circle effect13 bottom_to_top">
          <a href="#">
            <div class="img" id="trinity2"></div>
            <div class="info">
              <div class="info-back">
                <h3>TEAM NITROX</h3>
                <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
              </div>
            </div>
          </a>
          <h1 class="underImg">abcdefghijklmnon<br>(989679013)</h1>
        </div>
      </div>
      <div class="col-sm-4 t3">
        <div class="centerAlign iconTeam circle effect13 bottom_to_top">
          <a href="#">
            <div class="img" id="trinity3"></div>
            <div class="info">
              <div class="info-back">
                <h3>AUTOKRITI</h3>
                <p>Content here', making it look like readable English., content here', making it look like readable English.</p>
              </div>
            </div>
          </a>
          <h1 class="underImg">abcdefghijklmnon<br>(989679013)</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 animated pulse infinite"><h1 class="headings"><b>Our Mentors</b></h1><br><br> </div>
    </div>
  </div>

  <div class="fullwidth container">
    <div class="row">
      <div class="col-sm-4 t1">
        <div class="centerAlign iconTeam circle effect13 bottom_to_top">
          <a href="#">
            <div class="img" id="trinity1"></div>
            <div class="info">
              <div class="info-back">
                <h3>TEAM ACCELERONS</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </a>
          <h1 class="underImg">abcdefghijklmnon<br>(989679013)</h1>
        </div>
      </div>
      <div class="col-sm-4 t2">
        <div class="centerAlign iconTeam circle effect13 bottom_to_top">
          <a href="#">
            <div class="img" id="trinity2"></div>
            <div class="info">
              <div class="info-back">
                <h3>TEAM NITROX</h3>
                <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
              </div>
            </div>
          </a>
          <h1 class="underImg">abcdefghijklmnon<br>(989679013)</h1>
        </div>
      </div>
      <div class="col-sm-4 t3">
        <div class="centerAlign iconTeam circle effect13 bottom_to_top">
          <a href="#">
            <div class="img" id="trinity3"></div>
            <div class="info">
              <div class="info-back">
                <h3>AUTOKRITI</h3>
                <p>Content here', making it look like readable English., content here', making it look like readable English.</p>
              </div>
            </div>
          </a>
          <h1 class="underImg">abcdefghijklmnon<br>(989679013)</h1>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
