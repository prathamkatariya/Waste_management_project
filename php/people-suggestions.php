<!-- Php starts here -->

<?php

							$username = "root";
							$password = "";
							$SERVER = 'localhost';
							$db = 'apnicity';

							$con = mysqli_connect($SERVER, $username, $password, $db);

							if ($con) {
							?>

								<!-- <script>
									alert('connection successful');
								</script> -->
							<?php
							} else {
								die("no connection" . mysqli_connect_error());
							}
                     $selectquery = " select * from suggestions ";
							$query = mysqli_query($con, $selectquery);
							$nums = mysqli_num_rows($query);
							while ($res = mysqli_fetch_array($query)) {
?>

<!-- Php ended -->

<!-- Html starts here -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>People Suggestions</title>
      <!-- css link -->
      <link rel="stylesheet" href="../css/people-suggestions.css">
   </head>
   <body>
      <!-- Suggestions code start here -->

        <div class="header">
           
        </div>
        <div class="suggestions">
            <div class="content">
               <div class="heading">
                # <?php echo  $res['idea']; ?>  
               </div>
               <div class="name">
                  <p>-By <?php echo  $res['name']; ?></p>
               </div>
               <div class="para">
                  <?php echo  $res['suggestion']; ?>
               </div>
            </div>
        </div>
        <?php
				}

			?>

      <!-- Suggestions code ended -->

   </body>
</html>