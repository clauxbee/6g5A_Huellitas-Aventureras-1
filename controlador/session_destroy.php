<?php
session_start();
echo session_status();
session_destroy();
header("Location: ../login.php");
?>