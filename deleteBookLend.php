<?php   
    include "config.php";

//    if(isset($_POST['bookid'])){
    if(isset($_POST['DeleteBookLend'])){
       // $Book_id=$_POST['bookid'];
        // $Branch_id=$_POST['branchID'];
         $Card_No=$_POST['cardNo'];
         {

    $sql= "DELETE FROM `booklend` WHERE `booklend`.`cardNo`=  '$Card_No'";
    // $sql="DELETE FROM booklend WHERE `booklend`.`cardNo` = $Card_No'";

    $result=$conn->query($sql);

    // if($result == TRUE){    
            //if($conn->query($sql)==TRUE){
            if (mysqli_query($conn, $sql)) {
            //    if(mysqli_affected_rows($conn)==TRUE){
        echo "RECORD DELETED SUCCESSFULLY.";
    }
    //  elseif($sql="SELECT COUNT(*) FROM `booklend` WHERE `booklend`.`cardNo`=  $Card_No' ==0"){
    //     echo "ROW NOT FOUND.";
    //    }
    // elseif($sql="SELECT count(*) FROM `booklend` ==0"){
    //     echo "TABLE IS EMPTY.";
    //    } 
        
    else
    {
        echo "ERROR:" .$sql. "<br>". $conn->error;
       }
       header("Refresh:4; url=viewBooklend.php");
      // mysqli_close($conn);

   }

}

?>

<!-- extra code to run html -->
<!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <body>
        <div class="bg-img">


            <h2 class="h2">REMOVE BOOKLENDING INFO </h2>
            
            <br>
        <br>
        <br>
        <br>
        <br>
            <form class="formclass"  method="POST" action="" >
            

            <legend></legend>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <p>CARD NUMBER:</p>

            <input type="text" name="cardNo">
            <br>
            <br>
    

            <input type="submit" value="DELETE" name="DeleteBookLend">
        
    </form>
    </div>
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            body:before {
                content: '';
                position: fixed;
                width: 100vw;
                height: 100vh;
                /* background-image: url("mainpageBACKGROUND\\books-1281581.jpg");
                background-position: center center; */
                background-repeat: no-repeat;
                background-attachment: fixed;
                -webkit-background-size: cover;
                background-size: cover;
                -webkit-filter: blur(10px);
                -moz-filter: blur(10px);
                filter: blur(10px);
            }

            .bg-img {
                /* The image used */
                background-image: url("mainpageBACKGROUND\\books-1281581.jpg");

                /*  books-1204029.jpg */
                /* Control the height of the image */
                width: 100%;
                height: 100%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 500px;
                height: 400px;
                padding: 80px 40px;
                background: rgba(0, 0, 0, 0.5);

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: absolute;
            }

 
            .bg-img p {
                margin: 0;
                padding: 0;
                font-weight: bold;
                color: rgb(12,32,12);
            }

            .formclass {
                position: fixed;
                top: 5%;
                left: 40%;

            }

            .h2 {
                text-align: center;
                color:rgb(90, 64, 238);
                font-family: Berkshire Swash;
            }
        </style>


    
 </body>
</html>









