<?php


$n=4;
$r_q=4;
$c_q=4;

$cnt=0;
$diff = $r_q - $c_q;

for($i=1;$i<=$n;$i++)
{
    for($j=1;$j<=$n;$j++)
    {
      if(!($i==$r_q && $j==$c_q))
      {
        if($i == $r_q)
            $cnt++;
        else if ($j == $c_q)
            $cnt++;
        else if($i-$j == $diff)
          $cnt++;
      }
    }
}
echo $cnt;

 ?>
