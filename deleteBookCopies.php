

<?php   
    include "config.php";

//    if(isset($_POST['bookid'])){
    if(isset($_POST['DELETEBKCps'])){
       // $Book_id=$_POST['bookid'];
        // $Branch_id=$_POST['branchID'];
        $NoOfCopies=$_POST['No_of_copies'];

    $sql= "DELETE FROM `book_copies` WHERE `book_copies`.`No_of_copies`='$NoOfCopies'";

    $result=$conn->query($sql);

    // if($result == TRUE){
            //if($conn->query($sql)==TRUE){
            //if (mysqli_query($conn, $sql)) {
                if(mysqli_affected_rows($conn)==TRUE){
        echo "RECORD DELETED SUCCESSFULLY.";
    }
    else
    {
        // echo "ERROR RECORD NOT FOUND";//.$sql."<br>".$conn->error;
        echo "Error:". $sql . "<br>". $conn->error;
    }
       header("Refresh:4; url=viewBookCopies.php");
      // mysqli_close($conn);

   }

 

?>

<!-- extra code to run html -->
<!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <body>
        <div class="bg-img">
            <h2 class="h2">BOOK DELETE</h2>
            <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <form class="formclass" action=" " method="POST" >
      

            <legend></legend>
            <br>
            <br>
            <br>
            <br>
            <br>
              <p>NUMBER OF BOOKS:</p>
            <input type="text" name="No_of_copies">
            <br>
            <br>


            <input type="submit" value="DELETE" name="DELETEBKCps">

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
                width: 400px;
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









