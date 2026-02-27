<?php
session_start();
session_destroy();
$p = session_get_cookie_params();
setcookie(session_name(), '', time() - 3600, $p['path'], $p['domain'], $p['secure'], $p['httponly']); // Clear the session cookie 
header("Location: login.php");