<?php
$seed = $_POST['s'];
$numb = $_POST['n'];

include("growplot.php");
echo "<div class='tile' id='" . $numb . "'>";
echo "<img  class='tileimg' src='art/" . $type . "x" . $state . ".png'>";
echo "</div>"


 ?>
