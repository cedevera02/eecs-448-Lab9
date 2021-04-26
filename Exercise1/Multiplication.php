<?php
$cols = 100;
$rows = 100;
    echo "<table border=\"1\">";
    echo "<tr><td></td>";
    for ($i = 1; $i <=100; $i++){
        echo "<td>".$i."</td>";
    }
    for ($row =1; $row <= 100; $row++){

        echo"<tr><td>".$row."</td>";

        for ($col = 1; $col <= 100; $col++){
            echo '<td>' .$col*$row.'</td>';
        }
    echo '</tr>'; // close tr tag here

    }

    echo"</table>";
?>