<?php 
include "./includes/db.php";
$email = $_POST['email'];
$password = $_POST['password'];
$hashPassword = md5($password);
$sql = "INSERT INTO users (email, password, role)
        VALUES ('$email','$hashPassword',2)";
if(mysqli_query($conn, $sql))
{
    header("Location: adminform.php?success=true");
}else{
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>