<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <?php require "config.php"; ?>
  
  
  <div class="container">
    <div class="row" style="margin-top: 80px;">
      <div class="col-lg-6 offset-lg-3">
        <h3>Sing up From</h3>
        <form action="config.php" method="post">
          <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your Full name">
          </div>
          <div class="form-group">
            <label for="user_name">User Name</label>
            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter your User name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password">
          </div>

          <button name="submit" type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row" style="margin-top:80px">
      <div class="col-lg-2 offset-lg-5">
        <a href="user_info.php" class="btn btn-info">View User Data</a>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>