<?php
/**
 * Created by PhpStorm.
 * User: Binny
 * Date: 3/7/2016
 * Time: 3:40 PM
 */

session_start();
if (session_destroy()) {
    header("Location: index.php");
}
?>