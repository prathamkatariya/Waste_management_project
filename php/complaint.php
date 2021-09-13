<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complaint Registration</title>
  <!-- css link -->
  <link rel="stylesheet" href="../Complaint-css/complaint.css">
  <!-- Font Family link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <header>Register your complaint</header>

    <!-- Form Code Starts here -->

    <form action="#" method="POST" autocomplete="off" enctype="multipart/form-data">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name" required>
          <i class='fas fa-user'></i>
        </div>
        <input type="file" name="image" class="image" id="image" placeholder="upload image">
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone" required>
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="location" placeholder="Enter location" required>
          <i class="fa fa-map-marker"></i>
        </div>
      </div>
      <div class="message"  ondrop="drop(event)" ondragover="allowDrop(event)">
      <textarea placeholder="Write your complaint" name="complaint"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit" name="Submit" value="Submit Complaint">Submit Complaint</button>
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
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $complaint = $_POST['complaint'];


    $insertquerry = "INSERT INTO `complaints` (`name`, `image`, `phone`, `location`, `complaint`) VALUES ('$name', '$file', '$phone', '$location', '$complaint')";

    $result = mysqli_query($con, $insertquerry);

    if ($result) {
  ?>
      <script>
        location.replace("Complaint-registered.php");
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


</body>

</html>