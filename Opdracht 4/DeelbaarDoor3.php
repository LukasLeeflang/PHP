<?php $var = range(0, 30); ?>
<table>
    <?php foreach ($var as $number) {
        echo "<tr>
            <td>$number: </td>
            <td>";

            if($number % 3 == 0)  {
                echo "Dit getal is deelbaar door 3.";
            }
        echo "</td></tr>";
    }
    ?>

</table>