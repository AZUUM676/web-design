<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>display Student</title>
  <link rel="stylesheet" href="boots">
  <?php include("css.html");
  require_once("db_connect.php");
  
  ?>
  <script>
  function confirmDelete(varld) {
    if (confirm("Are you sure you want to delete this?")) {
      window.location.href = "process_delete.php?param=" + varld;

    }
  }
  </script>
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
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
      
      
      echo "<p style='color:green'>". htmlspecialchars($_GET['message'])."</p>";
      ?>
    </div>
    <div class="row">
      <!-- this is the table for data -->
      <table class="table">
        <thead class="thead-light">

          <tr>
            <th>Student No.</th>
            <th>first_name</th>
            <th>second_name</th>
            <th>email</th>
            <th>phone</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
          <?php
        // the query to fetch data from a redistration tablle in the database
        $sql="SELECT * FROM reg";
        $result=mysqli_query($connect, $sql);
        while($row=mysqli_fetch_assoc($result)){

        
        ?>
          <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['second_name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><a href="update_form.php?param=<?php echo $row['ID'];?>">Update From</a></td>
            <td>
              <button class="btn btn-danger" onclick="confirmDelete(<?php echo $row['ID'];?>)">Delete</button>
            </td>



          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
  </div>
  <?php
  include("js.html")?>
</body>

</html>