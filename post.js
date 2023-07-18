function saveValue(buttonValue) {
    // Connect to the database
    var connection = new XMLHttpRequest();
    connection.open("POST", "http://localhost/reema/Smart%20Methods/file.php");
    connection.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    connection.send("buttonValue=" + buttonValue);
  }
