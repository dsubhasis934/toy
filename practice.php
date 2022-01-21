<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function find_even_index($arr){
   $right=0;
   $left=0; 

    for($i = 0; $i < $arr.length; $i++){
      for( $j = 0; $j < $i; $j++){
        $left += $arr[$j];
      }
      for( $k = $arr.length - 1; $k > $i; $k--){
        $right += $arr[$k];
      }
      if($left == $right) return $i;  
    }
  return -1;
}
$value=find_even_index(1,2,3,4,3,2,1);
echo $value;
?>
</body>
</html>
