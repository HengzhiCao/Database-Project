<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
         <title>Title</title>
    </head>
    <body>
        <form action="" method="post">
            <p>source name:</p>
            <p><input type="text" name="source_name"  required="true"></p>
            <p>url:</p>
            <p><input type="text" name="source_url"  required="true"></p>
            <p>begin (optional):</p>
            <p><input type="text" name="source_begin" value=" " required="false"></p>
            <p>end (optional):</p>
            <p><input type="text" name="source_end"  value=" " required="false"></p>
            <p><input type="submit" name="submit" value="Parse"/></p>
    </form>
</body>
</html>

<?php 
        $dbServername = "mars.cs.qc.cuny.edu";
        $dbUsername = "cahe9544";
        $dbPassword = "23909544";
        $dbName = "cahe9544";
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        // $sql = "INSERT INTO test(source_name, source_url, source_begin, source_end) VALUES('$name','$url', '$begin', '$end');";
        $insert_occu = "INSERT INTO occurrence(source_id, word, freq) VALUES('$source_id','$word','$freq')";
        

        if (mysqli_query($conn, $sql)) {
                  echo "Successful";
              } 
              else {    
                  echo "Error";
              }
        if ($conn->query($insert_occu) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
        

        
        // if (isset($_POST['submit'])) {
        //     $name = $_POST['source_name'];
        //     $url = $_POST['source_url'];
        //     $begin = $_POST['source_begin'];
        //     $end = $_POST['source_end'];

        //     $sql = "INSERT INTO source(source_name, source_url, source_begin, source_end) VALUES('$name','$url', '$begin', '$end');";
        //     $insert = "INSERT INTO occurrence(source_id, word, freq) VALUES('$name','$url', '$begin');";


        //     if (mysqli_query($conn, $insert)) {
        //         echo "Successful";
        //     } 
        //     else {    
        //         echo "Error";
        //     }
        // }
        // function strip_sq($string){
        //     $string = strtoupper($string);
        //     $string = trim(preg_replace("/[^8-9a-z]+/i", " " , $string));
        //     return $string;
        //   }
    
        //   $input_file = file_get_contents($url);
        //   if($url_begin != null) $input_file=strstr($input_file,$url_begin);
        //   if($url_end != null) $input_file=strstr($input_file,$url_end,true);
        //   $input_file = strip_sq($input_file);
        //   $words=explode(' ',$input_file);
        //     $word_freq = array();
        //     foreach($word as $words){
        //       $word_freq[$word] +=1;
        //     }
          
        //     foreach($word_freq as $word =>$freq){
        //         $word= $_POST['word'];
        //         $freq =$_POST['freq'];
        //         $insert_to_occurence = "INSERT INTO occurence(source_id, word, freq) VALUES('$name', '$word', '$freq');";
        //         mysqli_query($conn,$insert_to_occurence);                  
        //       }
          
         
?>
