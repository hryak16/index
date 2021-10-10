<table border="1">
<?php
$rows=5; 
$cols=7; 

    for($tr=1; $tr<=5 ; $tr++){
        echo "<tr>";
        for($td=1; $td<=7 ; $td++){
            if(($tr==1) + ($td==1)){
                echo "<th style='background-color:yellow;font-weight:900'>",
                $tr * $td, "</th>";
            }
            else{
                echo"<td>",$tr*$td,"</td>";
            }
        }
        echo "</tr>";
    }
?>
</table>