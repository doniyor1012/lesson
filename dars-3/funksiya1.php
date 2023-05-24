<?php
/*
function name($a){
    echo "Salom" .' '.  $a."\n";
}
name("Doniyor");
name("Jamshid");
name("Mo'min");
name("Quvondiq");  */

  /*  function pownumber($number,$pow){
     return $number ** $pow;
}
echo pownumber(4,4);  */

//o'zgaruvchi muhiti global va local
//global "KALIT SO'Z"
// ANONIM FUNKSIYALAR "USE" KONSTRUKTOR

/* bu global o'zgaruvchi /* $name="doniyor";
           /* function ism(){
  // bu Local ko'rinish bunda xato beradi  echo "salom". $name;
       /* bu global ko'rinish  global $name;
            echo "salom".' '.$name;
}
 ism(); */
    $name = "doniyor";  //use kosntruktor ko'rinishi
        $ism = function ()  use  ($name){
            echo "Salom".' '.$name;
        };
    $ism();