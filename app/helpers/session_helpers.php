<?php
function isUserLogged() {
    return isset($_SESSION["authorize"]) && $_SESSION["authorize"];
}
?>
