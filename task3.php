<?php
  // 1st task
  session_start();
  $_SESSION["name"]="Sazid Islam";
  $_SESSION["budget"] = 12000;
  
  //2nd task
  echo "Welcome,". $_SESSION['name']."! "."Your budget is ". $_SESSION['budget']."\n";

  // 3rd task
  session_destroy();
  
  // (4) recursive fuction
  $sum_array = [1,2,3,4,5,6];
  function sum($array, $size): int{
    if($size<=0){
        return 0;
    }
    else{
        return ( sum($array, $size-1) + $array[$size-1] );
    }
  }
   
  // (6) error handling 
  function division($a,$b){
    try{
        if($b==0){
            throw new Exception ("Division by zero not possible");
        }
        else{
            return $a/$b;
        }
    }
    catch(Exception $error){
        return $error -> getMessage();
    }
    finally{
        echo "Error handling completed\n";
    }
  }

?>

