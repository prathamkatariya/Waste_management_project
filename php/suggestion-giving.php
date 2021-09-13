<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Give Suggestion</title>
  <!-- Font Awesome link -->
  <script src="https://kit.fontawesome.com/415069f141.js" crossorigin="anonymous"></script>
  <!-- css link -->
  <link rel="stylesheet" href="../css/suggestion-giving.css">
  <!-- Font Family link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <header>Drop your Suggestion </header>

    <!-- Form Code starts here -->

    <form action="#" method="POST" autocomplete="off">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="number" placeholder="Enter Mobile No." required>
          <i class="fa fa-phone"></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="idea" placeholder="Enter your idea in 2-3 words" required>
          <i class="fa fa-lightbulb-o"></i>
        </div>
        <div class="field">
          <input type="text" name="location" placeholder="Enter location" required>
          <i class="fa fa-map-marker"></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your Suggestion" name="suggestion"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit" value="submit" name="Submit">Submit Suggestion</button>
        <span></span>
      </div>
    </form>

    <!-- Form Code ended -->

  </div>

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

  if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $idea = $_POST['idea'];
    $location = $_POST['location'];
    $suggestion = $_POST['suggestion'];


    $insertquerry = "INSERT INTO `suggestions` (`name`, `number`, `idea`, `location`, `suggestion`) VALUES ('$name', '$number', '$idea', '$location', '$suggestion')";

    $result = mysqli_query($con, $insertquerry);

    if ($result) {
  ?>
      <script>
        location.replace("Suggestion-thankyou.php");
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

  <!-- php code ended -->

</body>

</html>