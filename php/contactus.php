<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome link -->
  <script src="https://kit.fontawesome.com/415069f141.js" crossorigin="anonymous"></script>
  <!-- css link -->
  <link rel="stylesheet" href="../css/contactus.css" />
  <title>Apni City</title>
</head>

<body>

  <!-- Navbar Code Starts here -->

  <nav class="navbar">
    <ul class="nav-list">
      <div class="logo">
        <p>Apni City</p>
      </div>
      <li>
        <a href="Index.php"><strong>Home</strong></a>
      </li>
      <li>
        <a href="about.php"><strong>About</strong></a>
      </li>
      <li>
        <a href="suggestions.php"><strong>Suggestions</strong></a>
      </li>
      <li>
        <a href="contactus.php" class="active"><strong>Contact us</strong></a>
      </li>
    </ul>
    <div class="right-nav">
      <ul>
        <li><a href="Admin-login.php"> Admin login </a></li>
        <li><a href="Staff-login.php">Staff login</a></li>
      </ul>
    </div>
  </nav>

  <!-- Navbar Code ended -->

  <!-- Contact us Code starts here -->

  <div class="container">

    <div class="form">
      <div class="contact-info">
        <h3 class="title">Contact us</h3>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          dolorum adipisci recusandae praesentium dicta!
        </p>

        <div class="info">
          <div class="information">
            <img src="../img/location.png" class="icon" alt="" />
            <p>Shastri Nagar, Ratlam, Madhya Pradesh 457001</p>
          </div>
          <div class="information">
            <img src="../img/email.png" class="icon" alt="" />
            <p>wastemanagement@gmail.com</p>
          </div>
          <div class="information">
            <img src="../img/phone.png" class="icon" alt="" />
            <p>07412-266399</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <form action="#" method="POST" autocomplete="off">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" value="" required />
            <label for="">Your Name</label>
            <span>Username</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" value="" required />
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="number" name="phone" class="input" value="" required />
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input" value=""></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" value="Send" name="Send" class="btn" />
        </form>
      </div>
    </div>
  </div>

  <!-- Contact us Code ended -->

  <!-- PHP Starts Here  -->
  <?php
  $username = "root";
  $password = "";
  $SERVER = 'localhost';
  $db = 'apnicity';

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

  if (isset($_POST['Send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];



    $insertquerry = "INSERT INTO `contactus` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";

    $result = mysqli_query($con, $insertquerry);

    if ($result) {
  ?>
      <script>
        alert("Your message sended successfully");
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("data not inserted");
      </script>
  <?php
    }
  }
  ?>

  <!-- php ended -->

  <!-- javascript link -->
  <script src="../js/contactus.js"></script>

</body>

</html>