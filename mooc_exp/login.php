<!DOCTYPE html>
<html>
    <head>
        <title>Mooc_Experience</title>
        <?php require ('link.php');?>
    </head>
<body>
  <?php
    if ($_POST[usr] == "staff" && $_POST[pwd] == "staff") {
      echo '<script language="Javascript">
      document.location.replace("home.php");
      </script>';
    }
  ?>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img id="logo" src="image/mooc-exp-logo.png">
        </div>
        <div class="col-md-7">
            <h2>Mooc experience</h2>
            <form action="" method="POST">
              <input type="text" placeholder="Username" name="usr"/>
              <input type="password" placeholder="password" name="pwd" />
              <input class="btn btn-primary btn-lg" role="button" type="submit" value="Log me"/>
            </form>
        </div>
      </div>
    </div>
  </div>

</body>