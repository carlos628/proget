<?php

session_start();
unset($_SESSION["sessioname"]); // desselecciona a vari�vel
session_destroy(); // detroy it
header("location: login.html"); // vai para a pagina login.html
?>