<?php
    include "config.php";

    $sql="SELECT * FROM booklend";

    $result= $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        </head>
<body>
    <div class="container">
        <!-- <h2>book</h2> -->
        <table class="table">
            <head>
                <tr>
                    <th>BOOK_ID</th>
                    <th>BRANCH ID</th>
                    <th>CARD NUMBER</th>
                    <th>DATE OUT</th>
                    <th>DUE DATE</th>

                </tr>
            
            </thead>
        </tbody>
    <?php 
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

 
        ?>
        <tr>
            <td><?php echo $row['Book_Id'];?></td>
            <td><?php echo $row['branch_id'];?> </td>
            <td><?php echo $row['cardNo'];?></td>
            <td><?php echo $row['dateOut'];?></td>
            <td><?php echo $row['DueDate'];?></td>
        
            <td>
                <!-- <a class="btn btn-info" href="update.php?if=<?php echo $row['branchid'];?>">
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
                width: 98%;
                height: 98%;
                position: absolute;
                top: 9%;
                left: 5%;
                overflow: auto;   
                transform: translate(-5%, -5%);
                width: 100%;
                height: auto;
                /* padding: 80px 40px; */
                padding: 20px 20px;

                background: rgba(0, 0, 0, 0.5);

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: absolute;
            }
                </style>
          <a class="btn btn-info" href="updateBookLend.php"> UPDATE</a>&nbsp;
          &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;

           <a class="btn btn-danger" href="deleteBookLend.php"> DELETE</a></td> 
       </tbody>
    </table>
    </div>
    </body>

</html>