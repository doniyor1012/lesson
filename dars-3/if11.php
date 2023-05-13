<?php
//1-999 oraliqdagi sonlar berilgan. Berilgan sonni "ikki xonali juft son",
// "uch xonali toq son" va h.k. ekranga yozadigan programma tuzilsin.
$a=-9;
if ($a>999){
    echo "4 xonali son";
}elseif ($a>99){
    echo "3 xonali son";
}elseif($a>9){
    echo "2 xonali son";
}elseif($a>0){
    echo "1 xonali son";
}else{
    echo "manfiy son";
}
