<?php
if ($_POST["username"] === "admin" && $_POST["password"] === "password123") {
    echo "Login successful.";
} else {
    echo "Invalid username or password.";
}
?>