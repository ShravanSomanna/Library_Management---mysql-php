
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['updateBookLend'])){
        $Book_id=$_POST['bookid'];
        $Branch_id=$_POST['branchID'];
        $Card_No=$_POST['cardno'];
        $Date_Out=$_POST['dateOut'];
        $Due_Date=$_POST['DueDate'];

        $sql= "UPDATE `booklend` SET `Book_ID`='$Book_id',`branch_ID`='$Branch_id',`cardno`='$Card_No',`dateOut`='$Date_Out',`DueDate`='$Due_Date' where `cardno`='$Card_No'";
       
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
     header("Refresh:4; url=viewBookLend.php");

{
     if(isset($_GET['cardno'])){
        $Card_No=$_GET['cardno'];

        $sql="SELECT * FROM  `booklend` WHERE 'cardno'='$Card_No'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $Book_id=$_POST['bookid'];
                $Branch_id=$_POST['branchID'];
                $Card_No=$_POST['cardno'];
                $Date_Out=$_POST['dateOut'];
                $Due_Date=$_POST['DueDate'];
                 }

        }
       else{
            //if bookid value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:4; url=viewBookLend.php");
             
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

            <h2 class="h2">UPDATE BOOKLEND INFO</h2>
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
            <br> <br>
            

            <p>BOOK_ID:</p>
            <input type="text" name="bookid">
            <br>


            <p>BRANCH_ID:</p>
            <input type="text" name="branchID">
            <br>

          <p> CARD NUMBER:</p>
            <input type="text" name="cardno">
            <br>

           <p> DATE OUT:</p>
            <input type="date" name="dateOut">
            <br>

           <p> DUE DATE:</p>
            <input type="date" name="DueDate">
            <br>
            <br>
            

           

            <input type="submit" value="UPDATE" name="updateBookLend">

        
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
                width: 480px;
                height: 520px;
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
