<?php

$a="fcrxzwscanmligyxyvym";
$b="jxwtrhvujlmrpdoqbisbwhmgpmeoke";

$arrA = str_split($a);
$arrB = str_split($b);

$cntA = count($arrA);
$cntB = count($arrB);
$delCnt=0;



//$result = array_diff($arrA, $arrB);
//print_r($result);

for($i=0;$i<$cntA;$i++)
{
    //$tmpA = $valCntA[$arrA[$i]];
    //$tmpB = $valCntB[$arrA[$i]];

    //$runnow = $arrA[$i];
    $key = in_array($arrA[$i],$arrB);
    if(!$key)
    {
        //$delCnt += $tmpA;
        $delCnt++;
        unset($arrA[$i]);
    }
    else
    {
        $valCntA = array_count_values($arrA);
        $valCntB = array_count_values($arrB);
        $tmpA = $valCntA[$arrA[$i]];
        $tmpB = $valCntB[$arrA[$i]];
        if($tmpA > 1 && $tmpA > $tmpB)
        {
          $delCnt++;
          unset($arrA[$i]);
        }
    }
    /*else if($tmpA > 1 && $tmpA > $tmpB)
    {
      unset($arrA[$i]);
      $delCnt++;
    }*/
}
for($i=0;$i<$cntB;$i++)
{
    $key = in_array($arrB[$i],$arrA);
    if(!$key)
    {
        unset($arrB[$i]);
        $delCnt++;
    }
    else
    {
        $valCntA = array_count_values($arrA);
        $valCntB = array_count_values($arrB);
        $tmpA = $valCntA[$arrB[$i]];
        $tmpB = $valCntB[$arrB[$i]];
        if($tmpB > 1 && $tmpB > $tmpA)
        {
          $delCnt++;
          unset($arrB[$i]);
        }
    }
}

echo $delCnt;

?>
