<?php
// Include database connection file
include("config.php");

// Retrieve [id] value from querystring parameter
$id = $_GET['id'];

// Delete row for a specified id
$stmt = $mysqli->prepare("DELETE FROM contacts WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

// Redirect to home page (index.php)
header("Location:index.php");
?>
