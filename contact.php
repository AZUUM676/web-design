<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>contact</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css" />
</head>

<body>
  <form action="" method="post">
    <div class="container">
      <label style="color: rgb(112, 34, 214); font-size: larger; margin-left: 25px; b">
        Form</label>
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
      <br />s
      <div>
        <label for="dbirth">Date Birth:</label>
        <input type="date" id="dbirth" name="dbirth" required />
      </div>
      <br />
      <div>
        <label for="pass">password:</label>
        <input type="text" id="pass" name="word" maxlength="10" required />
      </div>
      <br />
      <div>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" maxlength="10" required />
      </div>
      <br />
      <div>
        <label for="phone">telphone:</label>
        <input type="number" id="phone" name="number" maxlength="10" required />
      </div>
      <br />
      <div>
        <label for="gander">Gender:</label>

        <label for="mr.">Mr.</label>
        <input type="radio" id="mr." name="title" />

        <label for="mrs.">Mrs.</label>
        <input type="radio" id="mrs." name="title" />

        <label for="phD.">phD.</label>
        <input type="radio" id="phD." name="title" />
      </div>

      <br />

      <input type="reset" />

      <input type="submit" />
    </div>
  </form>
</body>

</html>