<?php
class Stanza {

  protected $room_number;

  protected $floor;

  protected $beds;

  protected $created_at;

  protected $updated_at;

  public function __construct($_room_number, $_floor, $_beds, $_created_at, $_updated_at){
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
    $this->created_at = $_created_at;
    $this->updated_at = $_updated_at;
  }

  public function getData(){
    return [
      'floor' => $this->floor,
      'room_number' => $this->room_number,
      'beds' => $this->beds,
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at
    ];
  }

}

?>
