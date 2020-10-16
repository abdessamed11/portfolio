<?php
include("connect.php");
session_start();

if (isset($_GET['deconnecte'])) {
    unset($_SESSION ['name']);
    header('location: index.php');
  }
  
if (!isset($_SESSION ['name']))
    header ('location:index.php');   
    ?>