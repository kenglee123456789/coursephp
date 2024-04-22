<?php 
include "./includes/db.php";
$email = $_POST['email'];
$password = $_POST['password'];
$hashPassword = md5($password);
$f_name = $_POST['f_name'];
$f_phone = $_POST['f_phone'];
$m_name = $_POST['m_name'];
$m_phone = $_POST['m_phone'];
$sql = "INSERT INTO users (email, password,f_name, f_phone, m_name, m_phone, role)
        VALUES ('$email','$hashPassword','$f_name','$f_phone','$m_name','$m_phone',4)";
if(mysqli_query($conn, $sql))
{
    header("Location: parentsform.php?success=true");
}else{
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
?>