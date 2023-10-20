<!doctype html>
<html>
    <head>
        <h1>insert data into library database</h>
</head>
<body>
    <center>
        <?php

        //call your database file into the current file
        require"dbconnect.php";

        //pick data from the user
        $title=$_REQUEST["title"];
        $author=$_REQUEST["author"];
        $gender=$_REQUEST["gender"];
        $category=$_REQUEST["category"];
        
        //insert data picked into the database
        $sql="insert into staff values('$title','$author','$gender','$category')";

        if($conn->query($sql)===true){
            echo "records inserted";
        }else{
            echo "error";
        }
        ?>
        </center>
        </body>
        </html>

