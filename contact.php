<!DOCTYPE html>
<html lang="en">

<head>

  <title>contact</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css" />
</head>

<body>
  <form action="processContact.php" method="POST">
    <div class="container">
      <label style="color: rgb(112, 34, 214); font-size: larger; margin-left: 25px; b">
      </label>
      <br />
      <br />
      <div>
        <label for="fname">frist name:</label>
        <input type="text" id="fname" name="fname" required />
      </div>
      <br />
      <div>
        <label for="lname">last name:</label>
        <input type="text" id="lname" name="lname" required />
      </div>
      <br />


      <br />
      <div>
        <label for="email">email:</label>
        <input type="text" id="email" name="email" maxlength="30" required />
      </div>
      <br />
      <div>
        <label for="phone">telphone:</label>
        <input type="number" id="phone" name="number" maxlength="10" required />
      </div>
      <br />


      <br />

      <input type="reset" />

      <input type="submit" />
    </div>
  </form>
</body>

</html>