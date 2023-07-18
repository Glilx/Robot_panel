<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Last Record</title>
</head>

<body>
  <?php
  // Connect to the database
  $db = new PDO("mysql:host=localhost;dbname=directions", "root", "");

  // Get the last record
  $statement = $db->prepare("SELECT * FROM action0 ORDER BY id DESC LIMIT 1");
  $statement->execute();
  $row = $statement->fetch();

  // Print the last record
  if ($row) {
    echo $row["move"];
  } else {
    echo "No records found";
  }

  // Close the connection
  $db = null;
  ?>
</body>

</html>
