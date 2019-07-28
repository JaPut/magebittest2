<?php

if($_POST){
    
    include_once '../crud/database.php';
    include_once '../crud/user.php';
 
    $database = new Database();
    $db = $database->getConnection();
    $user = new User($db);
    
    $user->id = $_POST['object_id'];
     
    if($user->delete()){
        echo "Object was deleted.";
    }
    else{
        echo "Unable to delete object.";
    }
}
?>