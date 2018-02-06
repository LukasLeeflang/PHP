<?php

$leeftijd = isset($_GET['leeftijd']) ? $_GET['leeftijd'] : '';
$prijs = 10;
$a = "Je moet ";
$b = " Euro entree betalen.";

?>

<html>
<body>

<?php

if ($leeftijd > 0 && $leeftijd < 4){
    echo $a . 0 . $b;
} elseif($leeftijd >= 65){
    echo $a . $prijs / 2 . $b;
} elseif ($leeftijd > 3 && $leeftijd < 13){
    echo $a . $prijs / 2 . $b;
} elseif ($leeftijd > 12 && $leeftijd < 65){
    echo $a . $prijs . $b;
}

?>
<form action="" method="get">
    <input name="leeftijd" id="leeftijd" type="text" placeholder="Voer uw leeftijd in.">
    <input type="submit" formmethod="get">
</form>
</body>
</html>
