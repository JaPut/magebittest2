<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
$username = $_SESSION['username'];

$page_title = "You are logged in successfully";
include_once "layout_header.php";

echo '<div style="font-size:1.25em;color:#0e3c68;font-weight:bold;">Your username is: <span style="font-size:1.25em;;font-weight:bold;">'.$username.'</span></div>';
 
echo "<div class='right-button-margin'><br>
    <a href='readusers.php' class='btn btn-primary btn-lg'>Read And Edit All User Attributes</a><br><br> 
    <a href='logout.php' class='btn btn-info btn-lg'>Log Out</a>
</div>";
?>