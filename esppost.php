<?php
$Temp= $_POST["temperature"];
$humid= $_POST["humidity"];
$Write=  "<p>Temperature : " . $Temp . "</p>". "<p>Humidity: " . $humid. "</p>";
file_put_contents('sensor1.html', $Write);
?>