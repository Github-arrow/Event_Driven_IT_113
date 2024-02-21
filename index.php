<?php

include ('./Config/Database.php');

$sql = "SELECT * FROM guest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "guest: " . $row["guest_ID"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
