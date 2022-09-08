<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CSCI 355 Assignment8</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script type="text/javascript" src="homepageUpdate.js"></script>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css">
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">CSCI 355</a></div>
        <ul class="links">
          <li><a href="index.html">Home</a></li>

          <li>
            <a href="#" class="desktop-link">Course</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Course</label>
            <ul>
              <li><a href="https://www.zybooks.com/" target="_blank">Zybook</a></li>
              <li><a href="https://tophat.com/" target="_blank">TopHat</a></li>
              <li><a href="https://drive.google.com/drive/folders/11mWopesSWOTVo2_Ya-8AUvvmgnKQD9Wo?usp=sharing" target="_blank">355 Google Drive</a></li>
              <li><a href="https://www.w3schools.com/" target="_blank">W3shchools</a></li>
              <li><a href="https://gaia.cs.umass.edu/kurose_ross/index.php" target="_blank">kurose</a></li>

            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">About</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">About</label>
            <ul>
              <li><a href="https://www.linkedin.com/in/hengzhi-cao-2829a2215/">LINKEDIN</a></li>
              <li><a href="mailto:HENGZHI.CAO44@qmail.cuny.edu">Send Email For FeedBack</a></li>

            </ul>
          </li>
          <li>

            <a href="parse2.php" class="desktop-link">Parse</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Parse</label>
            <ul>
                <li><a href="list.php">List of source</a></li>
            </ul>
          </li>

        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  <div class="dummy-text">
  <table class="table table-bordered">
           <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Url</th>
            <th scope="col">Begin</th>
            <th scope="col">End</th>
            <th scope="col">Updata time</th>
            <th scope="col">Word</th>

           </tr>
            <?php
             $dbServername = "mars.cs.qc.cuny.edu";
             $dbUsername = "cahe9544";
             $dbPassword = "23909544";
             $dbName = "cahe9544";
             $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
             $sql = "SELECT * FROM source";
             $result = $conn->query($sql);
            if($result->num_rows > 0){
                // echo"<table border ='1'>";
                // echo"<tr><td>ID</td></tr><tr><td>Name</td></tr><tr><td>Url</td></tr><tr><td>Begin</td></tr>
                // <tr><td>End</td></tr><tr><td>Updata time</td></tr>";
                while($row = $result -> fetch_assoc()){
                  echo "<tr>";
                  echo "<td>". $row["source_id"] ."</td>";
                  echo "<td>". $row["source_name"] ."</td>";
                  echo "<td>". $row["source_url"] ."</td>";
                  echo "<td>". $row["source_begin"] ."</td>";
                  echo "<td>". $row["source_end"] ."</td>";
                  echo "<td>". $row["parsed_dtm"] ."</td>";
                  echo '<td><a href="details.php">Report</a><td>';
                  

                  // echo '<td><input type = "button"  value="Report" onclick="location.href = details.php"><td>';
                  
                  
                  echo "</tr>";

                 }
                 }
                else{
                echo "No results";
                 }

                 
              $conn->close();

         ?>

        </table>
  </div>
</body>

</html>