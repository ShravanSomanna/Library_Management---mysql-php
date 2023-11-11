 <?php
   $servername="localhost";
    $username="root";
    $password="";
    $dbnamae="mydb";

    $conn=new mysqli($servername,$username,$password,$dbnamae);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);

    }
   // echo'<script>alert("connected successfully")</script>';


// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbnamae="mydb";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

    ?> 