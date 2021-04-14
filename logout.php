<?php
header("location: index.html");
session_start();
$_SESSION[""] = "";
session_destroy();

?>