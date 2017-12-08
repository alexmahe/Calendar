<?php include("dbConnection.php") ?>

<form action="delete.php" method="post">
    <input type="text" name="odj">
    <input type="submit" value="submit">
</form>

<?php

if(isset($_POST['odj'])){
    $query = "delete from calendrier where odj= '".$_POST['odj']."'";
    if($result = $connection->query($query)){
        echo "done";
    }
    else{
        echo "err";
    }
}

?>