<html>
  <body>
    <h1>Player Name is:</h1>
    <ul>
      <?php
        foreach(json_decode(file_get_contents('http://players')) as $player) {
          echo "<li>$player</li>";
        }
      ?>
    </ul>

  </body>
</html>