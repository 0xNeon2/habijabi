<?php include 'config.php';

$id = $_GET['id'];
$user = $connection->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $connection->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
<h2>Edit User</h2>
<form method="POST">
    Name: <input name="name" value="<?= $user['name'] ?>"><br><br>
    Email: <input name="email" value="<?= $user['email'] ?>"><br><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Back</a>
</body>
</html>
