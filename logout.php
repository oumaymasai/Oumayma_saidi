<?php

unset($_SESSION["username"]); // Replace "user_id" with the name of your session variable for the user ID
session_destroy();
exit();
?>
