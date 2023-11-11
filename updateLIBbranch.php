
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['updatelib'])){
        $Branch_id=$_POST['branchID'];
        $Branch_name=$_POST['branchName'];
        $Address=$_POST['address'];

        $sql= "UPDATE `libbranch` SET `branchID`='$Branch_id',`branchName`='$Branch_name',`address`='$Address' where `branchID`='$Branch_id'";
       
       $result=$conn->query($sql);{
         if($result==TRUE){
    //   if (mysqli_query($conn, $sql)==TRUE) {
             //echo "records are updated successfully";
             echo"RECORD UPDATED SUCCESSFULLY.";
        }
        else{
            echo "Error:".$sql ."<br>".$conn->error;
        }
    }

       // 
    header("Refresh:4; url=viewLIBbranch.php");

{
     if(isset($_GET['branchID'])){
        $Book_id=$_GET['branchID'];

        $sql="SELECT * FROM  `libbranch` WHERE 'branchID'='$Branch_id'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $Book_id =$row['branchID'];
                $Title   =$row['branchName'];
                $Publisher_name=$row['address'];
               

            }

        }
       else{
            //if bookid value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:4; url=viewLIBbranch.php");
             
        }
    }
    
}
}
            
  ?>
<!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <body>
        <div class="bg-img">

            <h2  class="h2"> LIBRARY BRANCH DATA</h2>
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


        <input type="submit" value="UPDATE" name="updatelib">

        
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
                width: 450px;
                height: 480px;
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
        
        <?php
        
    //     }else{
    //         //if bookid value is not valid redirect the user to view php page
    //         header('Location:view.php');
             
    //     }
    //  }

    ?> 
