<?php include("../dbConnection.php") ?>

<?php
    $query = "select " . "* from calendrier where date";
    $query .= "='".$_POST['date']."'";

    if($result = $connection->query($query)){
        printf("<ol>");

        while ($row = $result->fetch_row()) {
            printf ("<li> odj n°%s : %s, description : %s </li>", $row[0], $row[1], $row[3]);
        }
        printf("</ol>");
    }
?>
