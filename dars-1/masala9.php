<?php
$s="salom,nagap,kim,adi,bu";
$cnt=0;
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$w=0;
$r=0;
$k=0;
$t=0;
$y=0;
$u=0;
$p=0;
for ($i=0;$i<strlen($s);$i++) {

    if ("s" == $s[$i]) {
        $cnt++;
    } elseif ("a" == $s[$i]) {
        $a++;
    } elseif ('l' == $s[$i]) {
        $b++;
    } elseif ('o' == $s[$i]) {
        $c++;
    } elseif ('m' == $s[$i]) {
        $d++;
    } elseif ('n' == $s[$i]) {
        $e++;
    } elseif ('g' == $s[$i]) {
        $w++;
    } elseif ('p' == $s[$i]) {
        $r++;
    } elseif ('k' == $s[$i]) {
        $k++;
    } elseif ('i' == $s[$i]) {
        $t++;
    } elseif ('d' == $s[$i]) {
        $y++;
    } elseif ('b' == $s[$i]) {
        $u++;
    } elseif ('u' == $s[$i]) {
        $p++;
    }
}
    echo $cnt."\n".$a."\n".$b."\n".$c."\n".$d."\n".$e."\n".$w."\n".$r."\n".$k."\n".$t."\n".$y."\n".$u."\n".  $p ;

