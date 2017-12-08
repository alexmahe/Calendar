<?php include("dbConnection.php") ?>

<form action="create.php" method="post">
    <p>Date : <input type="date" name="date"></p>
    <p>ODJ : <input type="text" name="odj"></p>
    <p>Description : <input type="text" name="desc"></p>
    <input type="submit" value="submit">
</form>

<?php

if(isset($_POST['date']) && isset($_POST['odj'])){
    if(isset($_POST['desc'])){
        $query = "insert into calendrier(ODJ, DATE, DESCRIPTION) VALUES('";
        $query .= $_POST['odj']."', '";
        $query .= $_POST['date']."', '";
        $query .= $_POST['desc']."')";
    }
    else{
        $query = "insert into calendrier(ODJ, DATE) VALUES('";
        $query .= $_POST['odj']."', '";
        $query .= $_POST['date']."')";
    }

    if($result = $connection->query($query)){
        echo "done";
    }
    else{
        echo "fail";
    }
}

?>