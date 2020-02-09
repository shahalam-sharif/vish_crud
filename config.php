<?php require "dbconnect.php"; ?>
<?php session_start(); ?>

<?php  //insert data into database

     
      if(isset($_POST['submit'])){
          $f_name = $_POST['full_name'];
          $u_name = $_POST['user_name'];
          $email = $_POST['email'];
          $pass = md5($_POST['password']);

          $query = "INSERT INTO vs_users(full_name , user_name , email , password) VALUES('$f_name' , '$u_name' , '$email' , '$pass') ";

          $fire = mysqli_query($conn , $query) or die("DB facing some error" .mysqli_error($conn));

          if($fire){
              header('location: user_info.php');
          };
      }
  ?>
    
  <?php //delete data config
  
      if(isset($_GET['del'])){


           $id = $_GET['del'];

           $query = "DELETE FROM vs_users WHERE id = '$id'";

           $fire = mysqli_query($conn , $query);

           if($fire){
            header('location: user_info.php');
        }
      }

  ?>
    
  <?php //fetch data to edit config
  
      if(isset($_GET['edit'])){


           $id = $_GET['edit'];

           $_SESSION['u_id'] = $id;

           $query = "SELECT * FROM vs_users WHERE id = '$id'";

           $fire = mysqli_query($conn , $query);

           $user = mysqli_fetch_assoc($fire);


        
      }

  ?>
    
  <?php //update data config
    
      if(isset($_POST['update'])){

            $up_id = $_SESSION['u_id'];

            $u_f_name = $_POST['full_name'];
            $u_u_name = $_POST['user_name'];
            $u_email = $_POST['email'];
            $u_password = md5($_POST['password']);

           $query = "UPDATE vs_users SET full_name = '$u_f_name' , user_name = '$u_u_name' , email = '$u_email' ,  password = '$u_password' WHERE id = '$up_id' ";

           $fire = mysqli_query($conn , $query);

           if($fire) header('location: user_info.php');




        
      }
      
  ?>