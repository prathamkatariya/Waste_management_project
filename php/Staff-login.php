<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Staff Login</title>
   <!-- css link -->
   <link rel="stylesheet" href="../login-css/Staff-login.css">
</head>

<body>
   <div class="wrapper">
      <div class="title">
         Staff Login
      </div>

      <!-- Form Code starts here -->

      <form action="#" method="POST" autocomplete="off">
         <div class="field">
            <input type="text" name="username" required>
            <label>Username</label>
         </div>
         <div class="field">
            <input type="password" name="password" required>
            <label>Password</label>
         </div>
         <div class="content">
            <div class="checkbox">
               <input type="checkbox" id="remember-me">
               <label for="remember-me">Remember me</label>
            </div>
         </div>
         <div class="field">
            <input type="submit" name="Submit" value="Login">
         </div>
      </form>

      <!-- form Code ended -->

   </div>

   <!-- PHP Starts Here  -->
   <?php
   $username = "root";
   $password = "";
   $SERVER = 'localhost';
   $db = 'login';

   $con = mysqli_connect($SERVER, $username, $password, $db);

   if ($con) {
      /* ?>

              <script>
                  alert('Sending message');
              </script>
              <?php */
   } else {
      die("no connection" . mysqli_connect_error());
   }

   if (isset($_POST['Submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $username_search = " select * from stafflogin where username='$username'";
      $query = mysqli_query($con, $username_search);

      $username_count = mysqli_num_rows($query);

      if ($username_count) {
         $password_search = " select * from stafflogin where password='$password'";
         $pass_query = mysqli_query($con, $password_search);

         $password_count = mysqli_num_rows($pass_query);
         if ($password_count) {
   ?>
            <script>
               location.replace("Staff-home.php");
            </script>
         <?php
         } else {
         ?>
            <script>
               alert('Password incorrect');
            </script>
         <?php
         }
      } else {
         ?>
         <script>
            alert('Invalid username');
         </script>
   <?php
      }
   }
   ?>

   <!-- Php ended  -->


</body>

</html>