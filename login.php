<?php
session_start();
$conn = new mysqli("localhost", "root", "", "multi_shop_stock");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] === 'admin') {
            header("Location: index.html");
            exit();
        } else {
            header("Location: index.html");
            exit();
        }
    } else {
        $error = "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login Page</h2>
<form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" ><br><br>

    <label>Password:</label>
    <input type="password" name="password" ><br><br>

    <input type="submit" value="Login">
</form>

<?php
if (!empty($error)) {
    echo "<p style='color:red;'>$error</p>";
    
    
}
?>
</body>
</html>
