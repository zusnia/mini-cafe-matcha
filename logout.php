<?php
session_start();
session_destroy();
header("Location: landing-page.php");
exit();
