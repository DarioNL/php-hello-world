<?php


    function tabelmaken()
    {
        $dbc = mysqli_connect('localhost','root', '', '58151') or die('Error connecting.');
        $query = "SELECT* FROM broodjes";
        $result = mysqli_query($dbc, $query) or die ("Error querying.");
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>";
            echo $row["naam"];
            echo "</td>";
            echo "<td>";
            echo $row["gewicht"];
            echo "</td>";
            echo "<td>";
            echo $row["soort"];
            echo "<br>";
            echo "</td>";
            echo "<td>";
            echo "<nav> <a href=\"details.php?id=".$row['image_id'] ."\">details</a></nav>";
            echo "</td>";
            echo "<tr>";
        }
    }