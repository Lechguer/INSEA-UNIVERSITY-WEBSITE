<?php
session_start();
session_destroy();
header("Location: ../Page_principale/home.html");
exit;


?>