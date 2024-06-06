<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("meta.html");
  ?>
  <?php
  include("css.html");
  ?>
  <style>
  .thick {
    color: blue;
    font: 70px;
    text-decoration: underline;
  }

  #thin {
    color: brown;
    font: 30px;
    text-decoration: line-through;
    text-align: right;
  }

  p {
    color: blueviolet;
    text-decoration: underline;
  }
  </style>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <?php include("css.html");
  ?>
</head>

<body>
  <p id="thin">the image on the home page</p>
  <h1 class="thick">About page</h1>
  <a href="index.php">index_page</a>
  <br />
  <a href="contact.php">contact page</a>
  <br />
  <a href="services.php">our services</a>
  <br />

  <img src="image/image1.jpg" alt="index image" width="20%" height="20%" />
  <img src="image/image2.jpg" alt="about" width="20%" height="20%" />

  <iframe width="640" height="360" src="https://www.youtube.com/embed/TbIonQ2tkMQ"
    title="Dilaagii ugu halista badnaa ee ree Ciraaq hurdada u diidey 😱" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  <p>this sentence is bold</p>
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
                <a class="nav-link active" aria-current="page" href="index_page.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Register here</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ordredlist.html"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">About us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <?php include("js.html");
  ?>
</body>

</html>