<p> Electricity Bill Calaulation by switch </p>
<?php
 //calculate electrcity bill
  $unit = 99 ;
  // by using switch case


    switch ($unit) {
     case ( $unit <= 50):
      echo ($unit = $unit * 3.50 );
     break;
          case ($unit > 50 && $unit < 150):
            echo ($unit = $unit  * 4);
    break;
     default:
     echo ($unit = $unit * 6.50) ;
      break;
 }




?>
