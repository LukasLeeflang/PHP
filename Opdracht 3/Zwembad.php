<?php
    $zwemclubs = array(
        array("naam" => "De spartelkuikens", "leden" => "25"),
        array("naam" => "De waterbuffels", "leden" => "32"),
        array("naam" => "Plonsmderin", "leden" => "11"),
        array("naam" => "Bommetje", "leden" => "23"),
    );

    foreach($zwemclubs as $zwemclub){
        echo $zwemclub["naam"]."<br>";
        echo "Aantal leden: ";
        echo $zwemclub["leden"]."<br>";

        for($i = 5; $i <= $zwemclub['leden']; $i+=5) {
            echo '<img src="../Images/Zwemmer.png"'."<br>";
        }
        echo "<br>" . "<br>";
    }



    //$apen = array(
    //    array("naam" => "Harry", "leeftijd" => "14"),
    //    array("naam" => "Joost", "leeftijd" => "16"),
    //);
    //
    //foreach($apen as $aap){
    //    echo $aap["naam"];
    //    echo $aap["leeftijd"];
    //}