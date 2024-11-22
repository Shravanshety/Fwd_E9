<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass =$_POST['password1'];


$dsn = 'mysql:host=localhost;dbname=bank';
$username = 'root';
$password = '';

try {
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (fullname, email, phone_no,password) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([$fullname, $email, $phone, $pass]);
    echo "<br><center><b>New User $fullname Added Successful....!";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
<script>
    alert("New User Added Successful....!");
</script>

