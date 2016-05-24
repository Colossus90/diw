<?php
/**
 * Created by PhpStorm.
 * User: Jens Mollen
 * Date: 5/25/2016
 * Time: 12:59 AM
 */

if($_SESSION['loggedinTr'] == true){

}
else {
    header('location: settings_pages/login.php');
}
?>