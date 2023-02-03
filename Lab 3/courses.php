<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "it1150";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT course_id, title, credit_hrs FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    echo "Course ID: " . $row["course_id"]. " - Title: " . $row["title"]. " - Credit Hours: " . $row["credit_hrs"]. "<br>";
  }
} 
else
{
  echo "0 results";
}

$conn->close();
?>