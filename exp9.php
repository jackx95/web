<html>
<body>
    <form method="post">
        Name: <input type="text" name="name" id="name"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "post") {
    $name = $_POST['name'];
    // Set cookie 'name' for 30 days (86400 seconds * 30)
    setcookie('name', $name, time() + (86400 * 30), "/");
    echo "cookie set";
}

// Retrieve and display the cookie if it exists
if (isset($_COOKIE['name'])) {
    echo "Hello " . $_COOKIE['name'] . "!";
} else {
    echo "Welcome";
}
?>
