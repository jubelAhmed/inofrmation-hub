<?php

    session_start();
    unset($_SESSION['valid']);
    session_destroy();
    header("location:http://localhost:80/information-hub/index.html");
    exit();

?>