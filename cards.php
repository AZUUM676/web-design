<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="boo">
  <?php
  include("meta.html");
  ?>
  <?php
  include("css.html");
  ?>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
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
      <div class="row">
        <div class="col-lg-3">
          <div class="mt-3 card">
            <div class="card-header">Lehsan investment</div>
            <div class="card-body">
              <img src="image/image2.jpg" alt="home" class="container-fluid" />
              <h5 class="card-title">LEHSAN company</h5>
              <p class="card-text">
                A card is a flexible and extensible container for content. A
                card is a flexible and extensible container for content.
              </p>

              <a href="#" class="btn btn-success">Get more info</a>
            </div>
            <div class="card-footer" style="text-align: center">Read more</div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="mt-3 card">
            <div class="card-header">Lehsan investment</div>
            <div class="card-body">
              <h5 class="card-title">LEHSAN company</h5>
              <p class="card-text">
                A card is a flexible and extensible container for content. A
                card is a flexible and extensible container for content.
              </p>

              <a href="#" class="btn btn-success">Get more info</a>
            </div>
            <div class="card-footer" style="text-align: center">Read more</div>
          </div>
        </div>
      </div>
    </div>
    <?php include("js.html");
  ?>
</body>

</html>