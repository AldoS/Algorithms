<?php

$s = "aba";
$n = 10;
echo repeatedString($s, $n);

function repeatedString($s, $n) {
    // Complete this function
    $cnt = substr_count($s,"a");
    //echo $cnt."\n";
    $vDiv = floor($n/strlen($s));
    $vMod = $n % strlen($s);
    $cnt = $cnt*$vDiv;
    if($n % strlen($s) != 0)
    {
        $tmpStr = substr($s,0,$vMod);
        $cnt += substr_count($tmpStr,"a");
    }
    return $cnt;
}
?>
