<?php
//1-999 oraliqdagi sonlar berilgan. Berilgan sonni "ikki xonali juft son",
// "uch xonali toq son" va h.k. ekranga yozadigan programma tuzilsin.
$a=-4;
if ($a>99){
  if ($a%2==0){
      echo "3 xonali juft son";
  }else{
      echo "3 xonali toq son";
  }
}elseif ($a>9){
    if ($a%2==0){
        echo "2 xonali juft son";
    }else{
        echo "2 xonali toq son";
    }
}elseif ($a>0){
    if ($a%2==0){
        echo "1 xonali juft son";
    }else{
        echo "1 xonali toq son";
    }
}elseif ($a==0){
    echo "son nolga teng";
}elseif ($a<0){
    echo "berilgan son manfiy";
}