<?php

$m="give me one grand today night give d";
$n="give one grand today give d";

$arr=array();
$_fp = fopen("c:\\xampp\\htdocs\\hackerrank\\demo_input\\hashtable_input.txt", "r");
while( $line = fgets( $_fp ) )
{
  array_push($arr,$line);
}
//print_r($arr);

$m=$arr[0];
$n=$arr[1];

$magazine = explode(" ",trim($m));
$ransom = explode(" ",trim($n));

$found=0;

/*foreach($ransom as $key=>$value)
{
    if(array_key_exists($value,$arrRan))
        $arrRan[$value]=$arrRan[$value]+1;
    else
        $arrRan[$value]=1;
        //$arrRan[$value]=$key;
}

foreach($magazine as $key=>$value)
{
    if(array_key_exists($value,$arrMag))
        $arrMag[$value]=$arrMag[$value]+1;
    else
        $arrMag[$value]=1;

    //$arrMag[$value]=$key;
}*/
/*
foreach($arrRan as $key=>$value)
{
    if(array_key_exists($key,$arrMag))
    {
        $found++;
        unset($arrMag[$key]);
    }
}*/
$arrMag=array();
foreach($magazine as $key=>$value)
{
    //if(isset($value,$arrMag))
    //{
      if(array_key_exists($value,$arrMag))
          $arrMag[$value]=$arrMag[$value]+1;
      else
          $arrMag[$value]=1;
    //}

    //$arrMag[$value]=$key;
}

foreach($ransom as $key=>$value)
{
    if(array_key_exists($value,$arrMag) && $arrMag[$value]>0)      //if(isset($arrMag[$key]))
    {
        $found++;
        //$arrMag[$key] = $arrMag[$value]-1;
        $arrMag[$value]--;
        //unset($arrMag[$key]);
    }
}
/*
foreach($arrRan as $key=>$value)
{
  print_r(array_keys($arrRan,"give"));
  //$jhghgsdf= array_keys($arrRan,"give");
    if(isset($arrMag[$key]))
    {
        $found++;
        unset($arrMag[$key]);
    }
    //var_dump($arrMag);
}*/

/*foreach($ransom as $key=>$value)
{
    foreach($magazine as $key2=>$value2)
    {
        if($value == $value2)
        {
            $found++;
            unset($magazine[$key2]);
        }
    }
}*/
echo count($ransom) ."==". $found."\n";
if(count($ransom) == $found)
    printf("Yes");
else
    printf("No");

 ?>
