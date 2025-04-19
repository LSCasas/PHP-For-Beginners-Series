<?php

function logout()
{
    // Add your logout logic here, e.g., clearing session data
    session_start();
    session_unset();
    session_destroy();
}

logout();

header('location: /');
exit();
