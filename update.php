<?php include("dbConnection.php") ?>

<form action="update.php" method="post">
    <input type="date" name="date" placeholder="date">
    <input type="text" name="odj" placeholder="odj">
    <input type="text" name="newodj" placeholder="nouvel odj">
    <input type="text" name="newdesc" placeholder="nouvelle description">
    <input type="submit" name="submit">
</form>

<?php

if(isset($_POST['date']) && isset($_POST['odj'])){
    $result = $connection->query("select * from calendrier where Date ='".$_POST['date']."' and odj = '".$_POST['odj']."'");
    $query = "update calendrier set ";
    if($result->num_rows > 0){
        if (strlen($_POST['newodj']) > 0 && strlen($_POST['newdesc']) == 0){
            $query .= "odj = '".$_POST['newodj']."' ";
        }
        elseif (strlen($_POST['newdesc']) > 0 && strlen($_POST['newodj']) == 0){
            $query .= "description = '".$_POST['newdesc']."' ";
        }
        elseif (strlen($_POST['newodj']) > 0 && strlen($_POST['newdesc']) > 0){
            $query .= "odj = '".$_POST['newodj']."', description = '".$_POST['newdesc']."' ";
        }

        $query .= "where date = '".$_POST['date']."' and odj = '".$_POST['odj']."'";

        if($update = $connection->query($query)){
            echo "done";
        }
        else{
            echo "fail";
        }
    }
}

?>