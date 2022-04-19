<?php
session_start();
session_destroy();
header('Location: src/pages/samples/login.php');
exit();