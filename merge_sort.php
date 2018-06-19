<?php

$array = array(2, 1, 3, 1, 2);  //1 2 3 1 2 ->

$cnt=0; //$GLOBALS['cnt']
/*
function merge_sort($my_array){
    if(count($my_array) == 1 )
      return $my_array;
    $mid = count($my_array) / 2;
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
}

function merge($left, $right){
    $res = array();
    while (count($left) > 0 && count($right) > 0){
        if($left[0] > $right[0]){
            $res[] = $right[0];
            $right = array_slice($right , 1);
            $GLOBALS['cnt']++;
        }else{
            $res[] = $left[0];
            $left = array_slice($left, 1);
            $GLOBALS['cnt']++;
        }
    }
    while (count($left) > 0){
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }
    while (count($right) > 0){
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }
    return $res;
}
$test_array = array(100, 54, 7, 2, 5, 4, 1);
$test_array = array(2, 1, 3, 1, 2);
echo "Original Array : ";
echo implode(', ',$test_array );
echo "\nSorted Array :";
echo implode(', ',merge_sort($test_array))."\n";
echo $cnt;
*/
//function mergesort($array){
//  mergesort($array, $newArray, 0, count($array)-1);
//}
$newArray = array();
mergesort($array, $newArray, 0, count($array)-1);

function mergesort($array, $temp, $leftStart, $rightEnd){
  if($leftStart >= $rightEnd)
    return;
  $middle = floor(($leftStart+$rightEnd) / 2);
  mergesort($array, $temp, $leftStart, $middle);
  mergesort($array, $temp, $middle+1, $rightEnd);
  mergeHalves($array, $temp, $leftStart, $rightEnd);
}

function mergeHalves($array, &$temp, $leftStart, $rightEnd){
  $leftEnd =  floor(($rightEnd + $leftStart) / 2);
  $rightStart = $leftEnd + 1;
  $size = $rightEnd - $leftStart + 1;

  $left  = $leftStart;
  $right = $rightStart;
  $index = $leftStart;

  while($left <= $leftEnd && $right <= $rightEnd){
    if($array[$left] <= $array[$right]){
      $temp[$index] = $array[$left];
      $left++;
    }
    else{
      $temp[$index] = $array[$right];
      $right++;
    }
    $index++;
  }
}

$kshgdfsh=0;

 ?>
