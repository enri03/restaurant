<?php
session_start();

unset( $_SESSION['email']);
unset($_SESSION['fjalekalimi']);
header('Location: ../../admin.php?');



?>