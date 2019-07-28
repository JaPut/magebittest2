<?php
class User{
   
    private $conn;
    private $table_name = "attributes";
 
    public $id;
    public $username;
    public $age;
    public $phone;
    public $city;
    public $comments;
 
    public function __construct($db){
        $this->conn = $db;
    }

    function readAll(){
 
        $query = "SELECT
                    id, username, age, phone, city, comments
                FROM
                    " . $this->table_name . "
                ORDER BY
                    username ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
    function readOne(){
 
        $query = "SELECT
                    username, age, phone, city, comments
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?
                LIMIT
                    0,1";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->username = $row['username'];
        $this->age = $row['age'];
        $this->phone = $row['phone'];
        $this->city = $row['city'];
        $this->comments = $row['comments'];
    }

function update(){
 
        $query = "UPDATE
                " . $this->table_name . "
                SET
                    username = :username,
                    age = :age,
                    phone = :phone,
                    city  = :city,
                    comments  = :comments
                WHERE
                    id = :id";
 
         $stmt = $this->conn->prepare($query);
 
    // posted values
    $this->name=htmlspecialchars(strip_tags($this->username));
    $this->price=htmlspecialchars(strip_tags($this->age));
    $this->description=htmlspecialchars(strip_tags($this->phone));
    $this->category_id=htmlspecialchars(strip_tags($this->city));
    $this->category_id=htmlspecialchars(strip_tags($this->comments));
    $this->id=htmlspecialchars(strip_tags($this->id));
 
    // bind parameters
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':age', $this->age);
    $stmt->bindParam(':phone', $this->phone);
    $stmt->bindParam(':city', $this->city);
    $stmt->bindParam(':comments', $this->comments);
    $stmt->bindParam(':id', $this->id);
 
    if($stmt->execute()){
        return true;
    }
        return false;
}

function delete(){
 
    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
     
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
 
    if($result = $stmt->execute()){
        return true;
    }else{
        return false;
        }
    }
}

?>