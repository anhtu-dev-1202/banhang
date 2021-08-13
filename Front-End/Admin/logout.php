<?php
session_start();
include '../const.php';

if (isset($_SESSION["login"])) {
    session_destroy();
    header('location: '.DOMAIN.'index.php');
}
