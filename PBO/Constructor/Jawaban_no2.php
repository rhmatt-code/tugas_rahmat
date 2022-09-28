<?php
// Bagaimana membuat Constructur dan Desctructor
class Answer {
   public function __construct(){
     echo "this is construct";
   }
   public function __destruct(){
     echo "this is destruct";
   }
}
$answerno2 = new Answer();

    echo "<br>";
    unset($answerno2);
    echo "<br>";
?>
