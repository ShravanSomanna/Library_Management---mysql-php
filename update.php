
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['update'])){
        $Book_id=$_POST['bookid'];
        $Title=$_POST['title'];
        $Publisher_name=$_POST['pubname'];
        $pub_year=$_POST['pubyear'];

        $sql= "UPDATE `book` SET `bookid`='$Book_id',`title`='$Title',`pubname`='$Publisher_name',`pubyear`='$pub_year' where `bookid`='$Book_id'";
       
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

        header("Refresh:4; url=view.php");

{
     if(isset($_GET['bookid'])){
        $Book_id=$_GET['bookid'];

        $sql="SELECT * FROM  `book` WHERE 'bookid'='$Book_id'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $Book_id =$row['bookid'];
                $Title   =$row['title'];
                $Publisher_name=$row['pubname'];
                $pub_year=$row['pubyear'];

            }

        }
        else{
            //if bookid value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:4; url=view.php");
             
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
            <!-- <h2>BOOK DATA</h2>
            <form action=" " method="POST" >
            <fieldset>

            <legend> BOOK INFORMATION: </legend>
            BOOK_ID:<br>
            <input type="text" name="bookid">
            <br>

            BOOK TITLE:</br>
            <input type="text" name="title">
            <br>

            PUBLISHER NAME:</br>
            <input type="text" name="pubname">
            <br>

            PUBLISHED YEAR:</br>
            <input type="text" name="pubyear">
            <br>
            <input type="submit" name="update">

        </fieldset>
    </form> -->
    <h2 class="h2">UPDATE BOOKS</h2>
        <br>
        <br>
        <br>
        <br>
    <form class="formclass" method="POST" action="">

            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\alfons-morales-YLSwjSy7stw-unsplash.jpg"/>-->
            


            <legend></legend>
            <br>
            <br>
            <br>
            <br>
            <br>


            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\books-1204029.jpg"/> -->
            <p>BOOK_ID:</p>
            <input type="text" name="bookid">
            <br>


            <p>BOOK TITLE:</p>
            <input type="text" name="title">
            <br>

            <p>PUBLISHER NAME:</p>
            <input type="text" name="pubname">
            <br>

            <p>PUBLISHED YEAR:</p>
            <input type="text" name="pubyear">
            <br>
            <br>
            <input type="submit" value="UPDATE" name="update">

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
                width: 400px;
                height: 450px;
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
