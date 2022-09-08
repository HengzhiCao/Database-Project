<!DOCTYPE html>
<html lang="en>
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
        <td><a href="index.html">Get back the page</a><td>

        <table class="table table-striped table-dark">
            <tr>

            
             <th scope="col">Word</th>
             <th scope="col">Freq</th>
             <th scope="col">percent of word %</th>


            </tr>
             <?php
              $dbServername = "mars.cs.qc.cuny.edu";
              $dbUsername = "cahe9544";
              $dbPassword = "23909544";
              $dbName = "cahe9544";
              $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
              $sql = "SELECT * FROM occurence ORDER BY freq DESC";

              $sum = "SELECT SUM(freq) FROM occurence";
              $result = $conn->query($sum);


              while($row = mysqli_fetch_array($result)){
                $total = "". $row['SUM(freq)'];
                echo "<br>";

              }
             //   echo $total;
              //70006
             



              
              $result = $conn->query($sql);

              if($result->num_rows > 0){
                 // echo"<table border ='1'>";
                 // echo"<tr><td>ID</td></tr><tr><td>Name</td></tr><tr><td>Url</td></tr><tr><td>Begin</td></tr>
                 // <tr><td>End</td></tr><tr><td>Updata time</td></tr>";

                 while($row = $result -> fetch_assoc()){
                     // echo "<tr><td>" . $row["source_id"] . "</td><td>" . $row["source_name"] . "</td><td>" . $row["source_url"] . 
                     // "</td><td>" . $row["source_begin"] . "</td><td>" . $row["source_end"] . "</td><td>" . $row["parsed_dtm"] . "</td></tr>";
                    
                     echo "<tr>";
                     echo "<td>". $row["word"] ."</td>";
                     echo "<td>". $row["freq"] ."</td>";
                     echo "<td>". $row["freq"]/100 . '%'."</td>";

                     echo "</tr>";
 
 
                  }
                  }
                 else{
                 echo "No results";
                  }
 
 
               $conn->close();
 
          ?>
 
         </table>
    </body>
</html>