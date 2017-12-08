<?php include "../dbConnection.php"; ?>

<?php
    $query = "select" . "* from calendrier";

    if(!isset($_POST['date'])){
        $result = $connection->query($query);
    }
    else{
        $query .= " where date='".$_POST['date']."'";
        $result = $connection->query($query);
    }

    if($result){
        printf("<ol>");

        while ($row = $result->fetch_row()) {
            printf ("<li> odj n°%s : %s, description : %s </li>", $row[0], $row[1], $row[3]);
        }
        printf("</ol>");
    }

?>
