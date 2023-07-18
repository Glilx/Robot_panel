<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <button class="forward" name="forward" value="f" onclick="saveValue('f')">Forward</button>
  <Div class="center">
    <button class="left" name="left" value="l" onclick="saveValue('l')">Left</button>
    <button class="stop" name="stop" value="s" onclick="saveValue('s')">Stop</button>
    <button class="right" name="right" value="r" onclick="saveValue('r')">Right</button>
  </Div>
  <button class="backward" name="borward" value="b" onclick="saveValue('b')">Backward</button>
  <script src="post.js"></script>
  <?php
  include("file.php");
  ?>
</body>

</html>