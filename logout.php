<?php
session_destroy();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
header("Location:login.php");
