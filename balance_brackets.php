<?php

$arr=array();

$expression = "{{}(";
$arr = str_split(trim($expression));
echo find_balance($arr)."<br>";


/*$_fp = fopen("c:\\xampp\\htdocs\\hackerrank\\demo_input\\balance_bracket_input.txt", "r");
while( $line = fgets( $_fp ) )
{
  //array_push($arr,$line);
  $arr = str_split(trim($line));
  //echo $line."<br>";
  echo find_balance($arr)."<br>";
  //break;
}*/

function find_balance($exp)
{
  $tmp = array();

  foreach($exp as $val)
  {
    if($val == "{")
      array_push($tmp,"}");
    else if($val == "[")
      array_push($tmp,"]");
    else if($val == "(")
      array_push($tmp,")");
    else {
      $cnt=count($tmp);
      if($cnt==0 || $val != $tmp[$cnt-1])
        return "No";
      array_pop($tmp);
    }
  }
  if(count($tmp)==0)
    return "Yes";
  else
    return "NO";
}




 ?>
