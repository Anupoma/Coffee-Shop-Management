<?php
include "./config.php";

$id = $_GET["id"];
$sql = "DELETE FROM `item` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: operation1.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
