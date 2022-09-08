<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <p>source name:</p>
    <p><input type="text" name="source_name" required="true"></p>
    <p>url:</p>
    <p><input type="text" name="source_url" required="true"></p>
    <p>begin (optional):</p>
    <p><input type="text" name="source_begin" required="false"></p>
    <p>end (optional):</p>
    <p><input type="text" name="source_end" required="false"></p>
    <p><input type="submit" name="submit" value="Parse"/></p>
</form>
</body>
</html>

<?php 
        $servername  = "mars.cs.qc.cuny.edu";
        $username  = "cahe9544";
        $password  = "23909544";
        $Name = "cahe9544";

        $conn = new mysqli($servername, $username, $password,$Name);

        if(isset($_POST['sumbit'])){
            $sqname = $_POST['source_name'];
            $squrl = $_POST['source_rul'];
            $sqbegin = $_POST['source_begin'];
            $sqend = $_POST['source_end'];

            $sql = "INSERT INTO source(source_name, source_url, source_begin, source_end) VALUES('$sqname',
            '$squrl', '$sqbegin', '$sqend');";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        echo file_get_contents("squrl");

           
  
        }
        


?>
