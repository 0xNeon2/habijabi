<?php include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $connection->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Add User</title></head>
<body>
<h2>Add User</h2>
<form method="POST">
    Name: <input name="name"><br><br>
    Email: <input name="email"><br><br>
    <button type="submit">Save</button>
</form>
<a href="index.php">Back</a>
</body>
</html>
