<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome link -->
    <script
      src="https://kit.fontawesome.com/415069f141.js"
      crossorigin="anonymous"
    ></script>
    <!-- css link -->
    <link rel="stylesheet" href="../css/Admin-home.css" />
    <title>Apni City</title>
  </head>
  <body>

  <!-- Navbar Code starts here -->

    <nav class="navbar">
      <ul class="nav-list">
        <div class="logo">
          <p>Apni City</p>
        </div>
        <li>
          <a href="Index.php"  class="active" ><strong>Home</strong></a>
        </li>
        <li>
          <a href="#"><strong>About</strong></a>
        </li>
        <li>
          <a href="latest-update.php"><strong>Latest Update</strong></a>
        </li>
        <li>
          <a href="Contact-Staff.php"><strong>Contact Staff</strong></a>
        </li>
      </ul>
      <div class="right-nav">
        <ul>
          <li><a href="Index.php">  Logout </a></li>
        </ul>
      </div>
    </nav>

    <!-- Navbar Code ended -->

    <!-- Cards Code Starts here -->

    <div class="container">
        <div class="card">
            <div class="circle">
                <p>  See <br> Complaints</p>
            </div>
            <div class="content">
              <p> Click on 'GO' and register your complaint. We will review your complaint and follow up with you as soon as possible.<br> <strong>Thank You</strong></p>
              <a href="see-complaints.php">GO
            <i class="fa fa-sign-in"></i>
          </a>
            </div>
        </div>
        <div class="card">
            <div class="circle">
                <p>See Suggestions</p>
            </div>
            <div class="content">
              <p>Click on 'GO' and stay up-to-date with latest information about cleanliness in your locality and all around.<br> <strong>Thank You</strong></p>
              <a href="people-suggestions.php">GO
            <i class="fa fa-sign-in"></i>
          </a>
            </div>
        </div>
        <div class="card">
            <div class="circle">
              <p>Track Kachra Gadi</p>
            </div>
            <div class="content">
              <p> Click on 'GO' and track your Kachra Gadi. How much time it take to reach at your door or any reschedule in time happen? <br> <strong>Thank You</strong></p>
              <a href="Tracking.php">GO
            <i class="fa fa-sign-in"></i>
          </a>
            </div>
      </div>
    </div>

    <!-- Cards Code Ended -->

</body>
</html>
