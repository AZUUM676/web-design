<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <style></style>
  <title>my first page</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">web-design</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Register here</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ordredlist.php"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">About us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="row">
      <div id="carouselExample" class="carousel slide">
        <center>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="image/img1.jpeg" width="100%" class="d-block w-50" alt="">
            </div>
          </div>

        </center>
      </div>
    </div>
  </div>



  <div style="border: 2px solid red" class="container">
    <div class="row">
      <div class="col-lg-3" style="border: 2px solid red">
        <p>first</p>
      </div>
    </div>

    <img
      src="image/Black Codes Clipart Transparent PNG Hd, Coding On Screen Line Black Icon, Line Icons, Black Icons, Coding Icons PNG Image For Free Download.jpg"
      alt="image" width="270" height="270" />
    <img src="image/post-img.jpg" alt="postimage" />

    <p>my first writting cpde</p>

    <br />
    <?php include("js.html");
  ?>
</body>

</html>