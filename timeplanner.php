<?php

function meetingPlanner($slotsA, $slotsB, $dur) {
    // your code goes here
  print_r($slotsA);
  echo "dfgdf";
  sort($slotsA);
  sort($slotsB);
  for($i=0;$i<count($slotsA);$i++)
  {
    $tmpDurA = $slotsA[$i][1] - $slotsA[$i][0];
    if($tmpDurA >= $dur)
    {
      for($j=0;$j<count($slotsB);$j++)
      {
        $tmpDurB = $slotsB[$j][1] - $slotsB[$j][0];
        if($tmpDurB >= $dur)
        {
          if($slotsA[$j][1])
        }
      }
    }
  }
}

?>
