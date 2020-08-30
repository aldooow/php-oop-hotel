<?php
require_once(__DIR__ . '/stanza.php');
require_once(__DIR__ . '/db.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Hotel Boolean: Stanze</h1>
    <?php foreach ($stanze as $stanza) {
      $room = new Stanza ($stanza['room_number'], $stanza['floor'], $stanza['beds'], $stanza['created_at'], $stanza['updated_at']);
      $room_data = $room->getData();
    ?>

    <ul>
      <li>Room Number: <?php echo $room_data['room_number'] ?></li>
      <li>Floor: <?php echo $room_data['floor'] ?></li>
      <li>Beds: <?php echo $room_data['beds'] ?></li>
      <li>Created at: <?php echo $room_data['created_at'] ?></li>
      <li>Updated at: <?php echo $room_data['updated_at'] ?></li>
    </ul>

    <?php
    };
    ?>

  </body>
</html>
