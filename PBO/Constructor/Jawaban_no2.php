<?php
// buat class laptop
class laptop {
  
   public $pemilik = "Andi";
   
   public function __construct(){
     echo "Ini berasal dari Constructor Laptop";
   }
  
   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->pemilik";
  
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor Laptop";
   }
}
  
$laptop_andi= new laptop();
  
echo "<br />";
echo $laptop_andi->hidupkan_laptop();
echo "<br />";
?>