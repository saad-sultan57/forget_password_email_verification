<?php

include_once "connection/config.php";
session_start();
session_unset();
session_destroy();
header("Location: https://yellowsols.com/saad/rf/login.php")
?>