<?php include("../dbConnection.php") ?>

<?php

    if ($result = $connection->query("select * from calendrier")){

        printf("<ol>");
        while ($row = $result->fetch_row()) {
            printf ("<li> odj n°%s : %s le %s, description : %s </li>", $row[0], $row[1], $row[2], $row[3]);
        }
        printf("</ol>");

    }

?>