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
              <!-- <li><a href="https://www.linkedin.com/in/hengzhi-cao-2829a2215/">LINKEDIN</a></li>
              <li><a href="mailto:HENGZHI.CAO44@qmail.cuny.edu">Send Email For FeedBack</a></li> -->

            </ul>
          </li>

          <li>
            <a href="#" class="desktop-link">Parse</a>
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
    <h2>Parse info</h2>
    <dl>
      <form action=" " method="post">
        <p>source name:</p>
        <p><input type="text" name="source_name"  required="true"></p>
        <p>url:</p>
        <p><input type="text" name="source_url"  required="true"></p>
        <p>begin (optional):</p>
        <p><input type="text" name="source_begin" ></p>
        <p>end (optional):</p>
        <p><input type="text" name="source_end" ></p>
        <p><input type="submit" name="submit" value="Parse"/></p>
      </form>

    </dl>
    <?php 
        $dbServername = "mars.cs.qc.cuny.edu";
        $dbUsername = "cahe9544";
        $dbPassword = "23909544";
        $dbName = "cahe9544";
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        // $insert_to_occurrence = "INSERT INTO occurence(source_id, word, freq) VALUES('1', '2', '3');";
        // mysqli_query($conn, $insert_to_occurrence);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["source_name"];
            $url = $_POST["source_url"];
            $begin = $_POST["source_begin"];
            $end = $_POST["source_end"];

            $sql = "INSERT INTO source(source_name, source_url, source_begin, source_end) VALUES('$name','$url', '$begin', '$end');";
            mysqli_query($conn, $sql);
            // if (mysqli_query($conn, $sql)) {
            //     echo "Successful";
            // } 
            // else {    
            //     echo "Error";
            // }
            

          }

          // $insert_to_occurrence = "INSERT INTO occurrence(source_id, word, freq) VALUES('1', '2', '3');";
          // if ($conn->query($insert_to_occurrence) === TRUE) {
          //   echo "New record created successfully";
          // } else {
          //   echo "Error: " . $insert_to_occurrence . "<br>" . $conn->error;
          // }


            function strip_sq($string){
              $string = strtoupper($string);
              $string = trim(preg_replace("/[^0-9a-z]+/i", " " , $string));
              return $string;
            }
      
            $input_file = file_get_contents($url);
            // echo $input_file;
            if($url_begin != null) $input_file=strstr($input_file,$url_begin);
            if($url_end != null) $input_file=strstr($input_file,$url_end,true);
            $input_file = strip_sq($input_file);

            $words = explode(' ',$input_file);
            // print_r ($words);
            $word_freq = array();   
            $source_id = $conn->insert_id; 
            foreach($words as $word){
              $word_freq[$word] +=1;     
            }
            // echo $word_freq;
            // echo "<br>word freq:";
            // echo '<pre>',print_r($word_freq,1),'</pre>';
            // echo print_r($word_freq);
            foreach($word_freq as $word =>$freq){
              $insert_to_occurrence = "INSERT INTO occurence(source_id, word, freq) VALUES('$source_id', '$word', '$freq');";

                                  
              if (mysqli_query($conn, $insert_to_occurrence)) {
                // echo "New record created successfully";
              } else {
                // echo "Error: " . $insert_to_occurrence . "<br>" . $conn->error;
              }
            }
            

        

?>
  </div>

</body>
</html>