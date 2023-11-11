<?php
    include "config.php";

    $sql="SELECT * FROM branchauthor";

    $result= $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <title>TEMP Name</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        </head>
<body>
    <div class="container">
        <h1>BOOK AUTHORS</h1>
        <table class="table">
            <head>
                <tr>
                    <th>BOOK ID</th>
                    <th>AUTHOR NAME</th>
                </tr>
            
            </thead>
        </tbody>
    <?php 
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

 
        ?>
        <tr>
            <td><?php echo $row['bookid'];?></td>
            <td><?php echo $row['authorName'];?> </td>
            <td>
                 <!-- <a class="btn btn-info" href="updateBookAuthor.php?if=<?php echo $row['bookid'];?>">
            UPDATE</a>&nbsp;
                  <a class="btn btn-danger" href="deleteBookAuthor.php?id=<?php echo $row['authorName'];?>">
            Delete</a></td>   -->
            
           
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

          <a class="btn btn-info" href="updateBookAuthor.php"> UPDATE</a>&nbsp;
          &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
           <a class="btn btn-danger" href="deleteBookAuthor.php"> DELETE</a></td> 
       </tbody>
    </table>
    </div>
    </body>

</html>