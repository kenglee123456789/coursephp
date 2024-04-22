<?php 

include "./includes/db.php";

$id = $_GET['id'];

$sql = "UPDATE users SET is_delete = 1 WHERE id=$id";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: adminform.php");
}else{
    echo "Error: " . $sql . "<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>