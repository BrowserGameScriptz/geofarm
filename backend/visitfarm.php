<?php
$seed = $_POST['s'];
mt_srand(intval($seed));

include("dbconnect.php");
include("checkfirstvisit.php");

echo "visiting plot number " . $seed;

echo "<BR><BR><a href='backend/logout.php'>logout</a><Br><BR>";

$_POST['n'] = 0;


echo "<BR>";
include("viewplot.php");

?>
