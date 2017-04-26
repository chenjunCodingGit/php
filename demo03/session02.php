<?php
session_start();

if (isset($_SESSION["views"])) {
  $_SESSION["views"] += 1;
} else {
  $_SESSION["views"] = 1;
}

echo "浏览量：" . $_SESSION['views'];

//unset($_SESSION['views']);
//session_destroy();
?>