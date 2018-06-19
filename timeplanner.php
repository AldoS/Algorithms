<?php

/*
    Implement a function meetingPlanner that given the availability,
    slotsA and slotsB, of two people and a meeting duration dur, returns
    the earliest time slot that works for both of them and is of duration dur.
    If there is no common time slot that satisfies the duration requirement, return null
 */

function meetingPlanner($slotsA, $slotsB, $dur) {
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
