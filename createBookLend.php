<?php
    include "config.php";


 if(isset($_POST['submit'])){
        $Book_id=$_POST['bookid'];
        $Branch_id=$_POST['branchID'];
        $Card_No=$_POST['cardno'];
        $Date_Out=$_POST['dateOut'];
        $Due_Date=$_POST['DueDate'];
      
       

   // $sql = "INSERT INTO 'book' VALUES ('$Book_id','$Title','$pub_year')";
   $sql= //"INSERT INTO `book_copies` (`bookid`,`branchID`,`No_of_copies`) VALUES ('$Book_id', '$Branch_id','$NoOfCopies')";
  "INSERT INTO `booklend` (`Book_ID`, `branch_ID`, `cardno`,`dateOut`,`DueDate`) VALUES ('$Book_id', '$Branch_id', '$Card_No','$Date_Out','$Due_Date')";
    

    //$result = $conn->query($sql);

   // if($result == TRUE){
    // if($conn->query($sql)==TRUE){
    //     echo "new record created successfully";
    // }

    // else{
    //     echo "Error:". $sql . "<br>". $conn->error;
    // }
    
    // $conn->close();
    if (mysqli_query($conn, $sql)==TRUE) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<!-- <head> -->

<body>
    <div class="bg-img">
        <h2 class="h2">INSERT LENDING DATA</h2>
        <br>
        <br>
        <br>
        <br>


        <form class="formclass" method="POST" action="">
         <legend></legend>

         <br>
            <br>
            <br>
            <br>
            <br>
            <p>BOOK_ID:</p>
            <input type="text" name="bookid">
            <br>
            <br>


            <p>BRANCH_ID:</p>
            <input type="text" name="branchID">
            <br>
            <br>

            <p>CARD NUMBER:</p>
            <input type="text" name="cardno">
            <br>
            <br>

            <p>DATE OUT:</p>
            <input type="date" name="dateOut">
            <br>
            <br>

            <p>DATE:</p>
            <input type="date" name="DueDate">
            <br>
            <br>
           

            <input type="submit" value="INSERT" name="submit">
    </form>
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
                height: 530px;
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
    </div>



</body>
</html>