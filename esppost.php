<?php
$var1= $_POST["variable1"];
$var2= $_POST["variable2"];
$Write=  "<p>Variable1 : " . $var1 . "</p>". "<p>Variable2: " . $var2 . "</p>";
file_put_contents('sensor1.html', $Write);
?>
