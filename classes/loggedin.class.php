<?php
session_start();
if(isset($_SESSION['loggedinTr'])) {
    $hidden = "";
    $hidden2 = "style = visibility : hidden";
}
else {
    $hidden = "style = visibility : hidden";
    $hidden2 = "";
}

?>