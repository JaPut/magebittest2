<?php

include_once '../crud/database.php';
include_once '../crud/user.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

$stmt = $user->readAll();
$num = $stmt->rowCount();

$page_title = "Users attributes list";
include_once "layout_header.php";
 
echo "<div class='right-button-margin'>
    <a href='logout.php' class='btn btn-default pull-right'>LogOut</a>
    <a href='readattributes.php' class='btn btn-default pull-right'>ReadAttributes</a>
</div>";

if($num>0){
     echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Username</th>";
            echo "<th>Age</th>";
            echo "<th>Phone</th>";
            echo "<th>City</th>";
            echo "<th>Comments</th>";
        echo "</tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     extract($row);
         echo "<tr>";
            echo "<td>{$username}</td>";
            echo "<td>{$age}</td>";
            echo "<td>{$phone}</td>";
            echo "<td>{$city}</td>";
            echo "<td>{$comments}</td>";
            echo "<td>";
                 echo "<a href='updateusers.php?id={$id}' class='btn btn-info left-margin'>
                        <span class='glyphicon glyphicon-edit'></span>Edit</a>

                        <a delete-id='{$id}' class='btn btn-danger delete-object'>
                        <span class='glyphicon glyphicon-remove'></span>Delete</a>";
            echo "</td>";
         echo "</tr>";
  }
     echo "</table>";
}else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
include_once "layout_footer.php";
?>