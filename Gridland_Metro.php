<?php

$n = 4;
$m = 4;


$track = array(
  array(2,2,3),
  array(3,1,4),
  array(3,1,4),
  array(4,4,4),
  array(4,4,4)
);
$k = count($track);
/*
for($i=0;$i<$n;$i++)
{
  if($track[$i][0] == $i+1)   //means that track is in this row
  {
    for($j=0;$j<$m;$j++)
    {

    }
  }
}*/

$lmpArr =array();
for($i=0;$i<$n;$i++)
  for($j=0;$j<$m;$j++)
      $lmpArr[$i][$j] = 0;

$cntTrc=0;

for($i=0;$i<$k;$i++)
{
  for($j=$track[$i][1]-1;$j<=$track[$i][2]-1;$j++)
  {
    echo $i."-".$j."<br>";
    //if($lmpArr[$i+1][$j] == 0)
    if($lmpArr[$track[$i][0]-1][$j] == 0)
    {
      $lmpArr[$track[$i][0]-1][$j] = 1;
      $cntTrc++;
    }
  }
}

/*$jjj=0;
for($i=0;$i<$n;$i++)
  for($j=0;$j<$m;$j++)
      if($lmpArr[$i][$j] == 1)
        $jjj++;
*/

$ghfjhkf = $m*$n-$cntTrc;
echo "end: ".$ghfjhkf;
?>
