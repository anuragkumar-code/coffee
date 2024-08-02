<?php 

include('../../config/db.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); 
    $roles = $_POST['roles'];

    $sql = "INSERT INTO admins (name, email, password, roles) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $roles);

    if ($stmt->execute()) {
        echo '1';
    } else {
        echo '0';
    }

    $stmt->close();
    $conn->close();
}




?>