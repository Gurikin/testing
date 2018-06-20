<?php
// Давайте взвесим массив
// Измерим, сколько памяти занимает один целочисленный элемент массива. Сначала взвесим пустой массив:



// Ну и чтобы наверняка - два элемента:
$p1 = memory_get_usage();
echo ("At start script eating: <b>".$p1."</b> bytes of memory.<br>");
$a = array();
for ($i=0;$i<1000;$i++) {
    $a[$i] = $i;
}
echo ("array with 1000 elements eating: <b>".(memory_get_usage() - $p1)."</b> bytes of memory.<hr>");

//SplFixedArray
echo ("At start script eating: <b>".$p1."</b> bytes of memory.<br>");
$a = new SplFixedArray(1000);
for ($i=0;$i<1000;$i++) {
    $a[$i] = $i;
}
echo ("SplFixedArray with 1000 elements eating: <b>".(memory_get_usage() - $p1)."</b> bytes of memory.<hr>");

?>