<?php

session_start();

echo "Your are logging out, please wait";

session_destroy();
header("Location: index.php");
?>