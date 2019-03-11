<?php
session_start();
echo "My Favourite Color: ".$_SESSION["favcol"];
echo "<br>";
echo "My Favourite Language: ".$_SESSION["favlang"];

?>