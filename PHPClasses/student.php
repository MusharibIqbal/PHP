<?php
class student
{
  static $Count = 0;
   public  $FirstName;
   public $LastName ;
   public $BirthPlace; 
   public $DeathPlace;


// function __construct($FirstName,$LastName,$BirthPlace,$DeathPlace)
// {
//     $this-> FirstName = $FirstName;
//     $this-> LastName = $LastName;
//     $this-> BirthPlace = $BirthPlace;
//     $this-> DeathPlace = $DeathPlace;
//     self::$Count++;
// }


public function setfname($fname)
{
    $this->FirstName = $fname;
}
 public function getfname()
 {
     return $this->FirstName;
 }
}

// $b = new student("Musharib", "Iqbal", "Rawalpindi","Dont Know Yet");
// echo "FirstName = ".$b->FirstName."<br>";
// echo "LastName = ".$b->LastName ."<br>";
// echo "BirthPlace = ".$b->BirthPlace ."<br>";
// echo "DeathPlace = ".$b->DeathPlace ."<br>";

$c = new student();
 $c->setfname("Misha");
 echo "FirstName = ".$c->getfname();
?>