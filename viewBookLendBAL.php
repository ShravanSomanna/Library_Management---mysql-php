<?php
    include "config.php";

//$sql="SELECT * FROM booklend";//    'Book_Id','cardno','Duedate'
//$sql=" SELECT 'Book_Id','cardNo','DueDate' FROM `booklend` WHERE DATEDIFF('DueDate','dateOut')";
  //  $result= $conn->query(" SELECT 'Book_Id','cardNo','DueDate' FROM `booklend` WHERE 'DueDate'>DAYS.25");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        </head>
<body>
    <div class="container">
        <h3>BOOK LENDING BALANCE</h3>
        <table class="table">
            <head>
                <tr>
                    <th>BOOK_ID</th>
                    <!-- <th>BRANCH ID</th> -->
                    <th>CARD NUMBER</th>
                    <!-- <th>DATE OUT</th> -->
                    <th>DUE DATE</th>

                </tr>
            
            </thead>
        </tbody>
    <?php 
     $r=$conn->query("SELECT DATEDIFF(DueDate,dateout) FROM `booklend`");
    // echo    $r.$conn->query("DATEDIFF(`DueDate`,`dateout`) ");`Book_Id`,`cardNo`,`DueDate`
     $result= $conn->query(" SELECT `Book_Id`,`cardNo`,`DueDate` FROM `booklend` WHERE `dateOut`>='$r' ");
    // $result=$conn->query($sql);
       
     if($result->num_rows!=0){
        while($row=$result->fetch_assoc()){

        // $mysqli_result -> fetch_assoc()

 
        ?>
        <!-- <tr>
            <td><?php echo $row['Book_Id'];?></td>
           
            <td><?php echo $row['cardNo'];?></td>
          
            <td><?php echo $row['DueDate'];?></td>
        
            <td> -->

            <td><?php echo $row['Book_Id'];?></td>
            <td><?php echo $row['branch_id'];?> </td>
            <td><?php echo $row['cardNo'];?></td>
            <td><?php echo $row['dateOut'];?></td>
            <td><?php echo $row['DueDate'];?></td>            <!-- <a class="btn btn-info" href="update.php?if=<?php echo $row['branchid'];?>">
            UPDATE</a>&nbsp;
                  <a class="btn btn-danger" href="delete.php?id=<?php echo $row['branchid'];?>">
            Delete</a></td>  -->
            
           
        </tr>
               



        <?php }
      } 
        ?>
        
        
        <style>
                    .container {
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
                width: 100%;
                height: auto;
                padding: 80px 40px;
                background: rgba(0, 0, 0, 0.5);

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: absolute;
            }
                </style>
          
       </tbody>
    </table>
    </div>
    </body>

</html>