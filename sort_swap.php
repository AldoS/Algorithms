<?php
$arr = array(1, 1, 1, 2, 2);
$arr = array(2, 1, 3, 1, 2);  //1 2 3 1 2 ->
//echo countInversions($arr);

function countInversions($arr) {
  // Complete this function
  //print_r($arr);
  $n=count($arr);
  $cnt=0;

  while(true)
  {
    $countReturned = sortSwap($arr,$n);
    $cnt+=$countReturned;
    if($countReturned==0)
      break;
  }
  return $cnt;

	/*for($i=1;$i<$n;$i++)
	{
        $tmp = $arr[$i];
        while($i>0 && $arr[$i-1] > $arr[$i])
        {
          swap($arr[$i-1],$arr[$i]);
          $cnt++;
          $i--;
        }
	}
  return $cnt;*/
}

function sortSwap(&$arr,$n)
{
  $cnt1=0;
  for($i=1;$i<$n;$i++)
	{
        if($arr[$i-1] > $arr[$i])
        {
          swap($arr[$i-1],$arr[$i]);
          $cnt1++;
        }
	}
  return $cnt1;
}

function swap(&$x,&$y)
{
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}
/********************************************
*********************************************
Internet Solution
*********************************************
********************************************/


function merge_sort($my_array){
    if(count($my_array) == 1 ) return $my_array;
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
        }else{
            $res[] = $left[0];
            $left = array_slice($left, 1);
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
echo "Original Array : ";
echo implode(', ',$test_array );
echo "\nSorted Array :";
echo implode(', ',merge_sort($test_array))."\n";

 ?>
