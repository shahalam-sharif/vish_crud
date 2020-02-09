<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

        <?php require "config.php"; ?>

        <div class="container">
            <div class="row" style="margin-top:80px;">
                <div class="col-lg-10 offset-lg-1">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php 
                                
                                $query = "SELECT * FROM vs_users";

                                $fire = mysqli_query($conn , $query);

                                if(mysqli_num_rows($fire)>0){
                                    while($user = mysqli_fetch_assoc($fire)){ 

                                ?>
                                <tr>
                                    <td><?php echo $user['full_name'];?></td>
                                    <td><?php echo $user['user_name'];?></td>
                                    <td><?php echo $user['email'];?></td>
                                    <td><a href="update.php?edit=<?php echo $user['id']; ?>"
                                    class="btn btn-success" style="color:#fff;">Edit</a></td>
                                    <td><a href="config.php?del=<?php echo $user['id']; ?>"
                                    class="btn btn-danger" style="color:#fff;">Delete</a></td>
                                </tr>
                                <?php 
                                    

                                        }
                                    }

                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" style="margin-top:80px">
            <div class="col-lg-2 offset-lg-5">
                <a href="form.php" class="btn btn-info">Insert User Data</a>
            </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>