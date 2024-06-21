<?php
require_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>contact</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
  <form action=" process_update.php" method="POST">
    <div class="container">
      <label style="color: rgb(112, 34, 214); font-size: larger; margin-left: 25px; b">
      </label>
      <br />
      <br />
      <div>
        <?php
        // getting a specific id which represents the details of a single row
        $user_id=$_GET['param'];
        $query="SELECT * FROM reg WHERE ID = ?";
        $stmt=mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);
        //get a single result from the table
        $result=mysqli_stmt_get_result($stmt);
        // organizing a result into a row
        $row=mysqli_fetch_assoc($result);

        ?>
        <input type="hidden" name="id" value="<?php echo $row['ID']?>">
        <label for="fname">frist name:</label>
        <input type="text" id="fname" name="fname" value="<?php echo $row['first_name'];?>" required />
      </div>
      <br />
      <div>
        <label for="lname">last name:</label>
        <input type="text" id="lname" name="lname" value="<?php echo $row['second_name'];?>" required />
      </div>
      <br />


      <br />
      <div>
        <label for=" email">email:</label>
        <input type="text" id="email" name="email" value="<?php echo $row['email'];?>" maxlength="30" required />
      </div>
      <br />
      <div>
        <label for="phone">telphone:</label>
        <input type="number" id="  $fn=$_POST['email'];
" name="number" value="<?php echo $row['phone'];?>" maxlength="10" required />
      </div>
      <br />


      <br />

      <input type="reset" />

      <input type="submit" />
    </div>
  </form>
</body>

</html>