<?php
    include "config.php";


 if(isset($_POST['submit'])){
        $book_id=$_POST['bookid'];
        $Title=$_POST['title'];
        $published_year=$_POST['pubyear'];
    }

    $sql="INSERT INTO 'book'('bookid','title','pubyear') VALUES('$book_id','$Title','$published_year')  ";

    $result=$conn->query($sql);

    if($result==TRUE){
        echo"new record created successfully";
    }

    else{
        echo"Error:". $sql . "<br>". $conn->error;
    }

    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h2> TEMPORARY NAME</h2>
    <form action="" method="post">
        <fieldset>
            <legend>BOOK INFORMATION:</legend>
            BOOK_ID:</br>
            <input type="text" name="bookid">
            <br>

            BOOK TITLE:</br>
            <input type="text" name="title">
            <br>

            PUBLISHED YEAR:</br>
            <input type="text" name="pubyear">
            <br>

        </fieldset>
    </form>

</body>
</html>