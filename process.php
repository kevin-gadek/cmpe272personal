<?php
$hostname = "localhost";
$username = "id3204915_admin";
$password = "password";
$db = "id3204915_db1";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


$query = "SELECT `email` AND `password` FROM `users` WHERE `email` = '$username' and password = '$password'";

 $result = $conn->query($query);
 if($result->num_rows > 0) {
     $message = "success";
    $query = "SELECT `id`, `email` FROM `users`";

    $result = $conn->query($query);
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>" .$row["id"]. " - Email: " . $row["email"] . "</li><br>";
    }
     //header("Location: welcome.php?Message=" . urlencode($message));
      die();
    }else{
        $message = "fail";
        header("Location: login.php?Message=" . urlencode($message));
        die();
    }
    
    mysqli_close($conn);


?>