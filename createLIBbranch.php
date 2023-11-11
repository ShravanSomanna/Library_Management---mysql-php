   <?php
include "config.php";

if(isset($_POST['submit'])){
    $Branch_id=$_POST['branchID'];
    $Branch_name=$_POST['branchName'];
    $Address=$_POST['address'];
   

$sql= "INSERT INTO `libbranch` (`branchID`, `branchName`,`address`) VALUES ('$Branch_id', '$Branch_name','$Address')";

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
<h2 class="h2">INSERT LIBRARY BRANCH</h2>
<br>
<br>
<br>
<br>

<form  class="formclass" action=" " method="POST">


     <legend></legend>
     <br>
            <br>
            <br>
            <br>
            <br>
        <p>BRANCH_ID:</p>
        <input type="text" name="branchID">
        <br>
        <br>

      
        <p>BRANCH NAME:</p>
        <input type="text" name="branchName">
        <br>
        <br>
        

     
       <p>ADDRESS:</p>
        <input type="text" name="address">
        <br>
        <br>


        <input type="submit" value="CREATE" name="submit">
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
                height: 500px;
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
