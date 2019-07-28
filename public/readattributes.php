<?php

include_once '../crud/database.php';
include_once '../crud/attribute.php';

$database = new Database();
$db = $database->getConnection();
$attribute = new Attribute($db);

$stmt = $attribute->readAll();
$num = $stmt->rowCount();

$page_title = "Attribute values list";
include_once "layout_header.php";
 
echo "<div class='right-button-margin'>
    <a href='logout.php' class='btn btn-default pull-right'>LogOut</a>
    <a href='readusers.php' class='btn btn-default pull-right'>ReadUsers</a>
</div>";

if($num>0){
     echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Attributevalue</th>";
            echo "<th>Attributemeasure</th>";
            echo "<th>Comments</th>";
        echo "</tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     extract($row);
        echo "<tr>";
            echo "<td>{$attributevalue}</td>";
            echo "<td>{$attributemeasure}</td>";
            echo "<td>{$comments}</td>";
        echo "</tr>";
  }
     echo "</table>";
}else{
    echo "<div class='alert alert-info'>No attribute found.</div>";
}
include_once "layout_footer.php";
?>