<?php


if (isset($_POST['Celsius'])) {
    $c = $_POST['Celsius'];
    $f = ($c * 9/5) + 32;
    echo "<pre>$c graden Celsius is " . $f ." graden Fahrenheit</pre>";
}

echo <<<_END

<pre>
<form method="post" action="">

Celsius naar Fahrenheit:
    <input type="text" name="Celsius" size="5" />
    <input type="submit" value="Fahrenheit" />

</form>
</pre>


_END

?>