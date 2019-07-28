<?php
// get ID of the product to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once '../crud/database.php';
include_once '../crud/user.php';
 
$database = new Database();
$db = $database->getConnection();
$product = new User($db);
 
$product->id = $id;

$product->readOne();
$page_title = "Update User attributes";
include_once "layout_header.php";
?>

<?php 
// if the form was submitted
if($_POST){
 
    // set product property values
    $product->username = $_POST['username'];
    $product->age = $_POST['age'];
    $product->phone = $_POST['phone'];
    $product->city = $_POST['city'];
    $product->comments = $_POST['comments'];
 
    // update the product
    if($product->update()){
        echo "<div class='alert alert-success alert-dismissable'>";
            echo "Product was updated.";
        echo "</div>";
    }
 
    // if unable to update the product, tell the user
    else{
        echo "<div class='alert alert-danger alert-dismissable'>";
            echo "Unable to update product.";
        echo "</div>";
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='username' value='<?php echo $product->username; ?>' class='form-control' /></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type='text' name='age' value='<?php echo $product->age; ?>' class='form-control' /></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type='text' name='phone' value='<?php echo $product->phone; ?>' class='form-control' /></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type='text' name='city' value='<?php echo $product->city; ?>' class='form-control' /></td>
        </tr>
        <tr>
            <td>Comments</td>
            <td><textarea name='comments' class='form-control'><?php echo $product->comments; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Update</button>
               </button>
            </td>
        </tr>
 
    </table>
</form>
<?php
  
echo "<div class='right-button-margin'>";
    echo "<a href='readusers.php' class='btn btn-primary pull-left'>Read All Users</a>";
echo "</div>";
 
// set page footer
include_once "layout_footer.php";
?>