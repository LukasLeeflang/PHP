<?php
    include("header.php");

    $messages = array();

    if(!isset($_GET["roepnaam"]) && !isset($_GET["favkleur"])) {
        $messages[] = "You have to fill in the form first!";
    } else if (strlen($_GET["roepnaam"]) < 2) {
        $messages[] = "A name has to include atleast two letters.";
    } else if (strlen($_GET["favkleur"]) < 3) {
        $messages[] = "A color has to include atleast three letters.";
    }

    if(!count($messages) == 0) {
        //Messages weergeven

        $html = "<ul>";

        foreach($messages as $message) {
            $html .= "<li>".$message."</li>";
        }
        $html .= "</ul>";
        echo $html;
    } else {
        echo "Hello " . $_GET["roepnaam"] . "!" . "<br>";
        echo "Your favorite color is " . $_GET["favkleur"] . ".";



        ?>

        <div style="background-color:<?php echo $_GET["favkleur"]; ?>; height: 200px; width: 200px;"></div>


        <?php
    }

    include("footer.php");
?>
