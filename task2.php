<?php
   // (1) array with categories and expenses 
   $array = [
    "kachi" => 350,
    "biriyani" => 400,
    "burger" => 200 ,
   ];

   // (2) array_push
   $array["Pizza"] = 250;

   // array pop
   array_pop($array);

   //array merge
   $array1 = ["pizza"=> 250];
   $array = array_merge($array, $array1);

   //array sum
   array_sum($array);

   // (3) explode and implode 
   $expenses = "350,400,200,250";
   // explode
   $expenses_array = explode(",", $expenses);
   // implode
   $expenses_string = implode(",", $expenses_array);

   // (4) string operations 
   $name = "Sazid Islam";
   // to upper
   $new = strtoupper($name);
   // string length
   $size = strlen($name);
   // substring
   $sub = substr($name, 0,-2);

   // (5) file create 
   $file = "expense.txt";
   // file write
   $data =  print_r($expenses_array, true);
   file_put_contents($file, $data);

   // (6) append new data
   file_put_contents($file, "150", FILE_APPEND);

   // show data on page
   echo file_get_contents($file);
?>