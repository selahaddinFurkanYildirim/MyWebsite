<?php
if($_SERVER['HTTP_USER_AGENT'] !== false) {
    echo "you can't do this";
    http_response_code(403); //FORBIDDEN
    exit;
}
?>
password1
last line should be NULL
