<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - staff</title>
    <!-- Font Awesome link -->
    <script src="https://kit.fontawesome.com/415069f141.js" crossorigin="anonymous"></script>
    <!-- css link -->
    <link rel="stylesheet" href="../about-css/Contact-Staff.css" />
</head>

<body>
    <!-- Navbar Code starts here -->

    <nav class="navbar">
        <ul class="nav-list">
            <div class="logo">
                <p>Apni City</p>
            </div>
            <li>
                <a href="Index.php"><strong>Home</strong></a>
            </li>
            <li>
                <a href="#"><strong>About</strong></a>
            </li>
            <li>
                <a href="latest-update.php"><strong>Latest Update</strong></a>
            </li>
            <li>
                <a href="Contact-Staff.php" class="active"><strong>Contact Staff</strong></a>
            </li>
        </ul>
        <div class="right-nav">
            <ul>
                <li><a href="Index.php"> Logout </a></li>
            </ul>
        </div>
    </nav>

    <!-- Navbar Code ended -->

    <div class="container">
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

        if (isset($_POST['Send'])) {
            $message = $_POST['message'];
    
            $insertquerry = "INSERT INTO `messages` (`message`) VALUES ('$message')";
    
            $result = mysqli_query($con, $insertquerry);
    
            if ($result) {
        ?>
                <script>
            location.replace("Contact-Staff.php");
          </script>
            <?php
            } else {
            ?>
                <script>
                    alert("message not sent");
                </script>
        <?php
            }
        }
    
        $selectquery = " select * from messages ";
        $query = mysqli_query($con, $selectquery);
        $nums = mysqli_num_rows($query);
        while ($res = mysqli_fetch_array($query)) {
        ?>
            <div class="message">
                <p> <?php echo  $res['message']; ?> </p>
            </div>
        <?php
        }
        ?>
        <div class="time">
            <?php
            $timezone = date_default_timezone_set('Asia/Kolkata');
            // echo date("h:i:s A"); 
            ?>
        </div>
    </div>
    <form action="#" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="text" name="message" placeholder="Write Your Message" class="text" required>
        <button type="submit" class="button" name="Send">Send</button>
    </form>

</body>

</html>