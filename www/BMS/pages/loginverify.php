
    <?php
    session_start();
    $emailid = $_POST['email'];
    $pass = $_POST['password'];
    $message = "";

    // Establishing connection
    $con = mysqli_connect("localhost", "root", "", "bank");

    // Checking connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();

    }
    // Avoiding SQL Injection using prepared statements
    $stmt = $con->prepare("SELECT * FROM users WHERE email=? AND password=?");
    $stmt->bind_param("ss", $emailid, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User logged in successfully
        
        $message = "$emailid logged in successfully........!";
        echo "<script>alert('$message');</script>";

        header("Location: usermain.html");
        exit();
    } 
     elseif (empty($emailid)) {
        $message = "Please Enter Email";
    } elseif (empty($pass)) {
        $message = "Please Enter Password";
    } else {
        $message = "Invalid Email or Password";
    }

    // Displaying message using JavaScript alert
    echo "<script>alert('$message');</script>";

    // Closing connection
    mysqli_close($con);
    ?>
