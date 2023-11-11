<?php
include "config.php";

$sql = "SELECT * FROM book";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <!-- <h1>book</h1> -->
        <table class="table">

            <head>
                <tr>
                    <th>BOOK_ID</th>
                    <th>TITLE</th>
                    <th>PUBLISHER-NAME</th>
                    <th>PUBLISHED-YEAR</th>
                </tr>

                </thead>
                </tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {


                ?>
                        <tr>
                            <td><?php echo $row['bookid']; ?></td>
                            <td><?php echo $row['title']; ?> </td>
                            <td><?php echo $row['pubname']; ?></td>
                            <td><?php echo $row['pubyear']; ?></td>
                            <td>



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

                </tbody>
                <a class="btn btn-info" href="update.php"> UPDATE</a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;

                        <a class="btn btn-danger" href="delete.php"> DELETE</a></td>
        </table>
    </div>
</body>

</html>

<!-- <a class="btn btn-info" href="update.php?if=<?php echo $row['bookid']; ?>">
            UPDATE</a>&nbsp;
                  <a class="btn btn-danger" href="delete.php?id=<?php echo $row['bookid']; ?>">
            Delete</a></td>   -->