<?php
class Attribute{
   
    private $conn;
    private $table_name = "attributesinfo";
 
    public $id;
    public $attributevalue;
    public $attributemeasure;
    public $comments;
 
    public function __construct($db){
        $this->conn = $db;
    }

    function readAll(){
 
        $query = "SELECT
                    id, attributevalue, attributemeasure, comments
                FROM
                    " . $this->table_name . "";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
}