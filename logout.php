<?php
session_start();
session_destroy();
header("Location: homepage.php?pesan=logout");
exit();
?>