<?php
require_once(__DIR__ . '/stanza.php');

  $stanze = [
    [
      'room_number' => '100',
      'floor' => '1',
      'beds' => '2',
      'created_at' => '2018-05-28 13:33:11',
      'updated_at' => '2018-05-28 13:33:11'
    ],
    ['id' => '2','room_number' => '101','floor' => '1','beds' => '3','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '3','room_number' => '102','floor' => '1','beds' => '3','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '4','room_number' => '103','floor' => '1','beds' => '1','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '5','room_number' => '104','floor' => '1','beds' => '2','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '6','room_number' => '105','floor' => '1','beds' => '2','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '7','room_number' => '201','floor' => '2','beds' => '2','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '8','room_number' => '202','floor' => '2','beds' => '3','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '9','room_number' => '203','floor' => '2','beds' => '3','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '10','room_number' => '204','floor' => '2','beds' => '1','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '11','room_number' => '205','floor' => '2','beds' => '2','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '12','room_number' => '301','floor' => '3','beds' => '3','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '13','room_number' => '302','floor' => '3','beds' => '3','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '14','room_number' => '303','floor' => '3','beds' => '2','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11'],
    ['id' => '15','room_number' => '304','floor' => '3','beds' => '1','created_at' => '2018-05-28 13:33:11','updated_at' => '2018-05-28 13:33:11']
    ];
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
