<?php
   // (1) Constant names
   define("App_name","Foodies");
   define("Author","Sazid Islam");

   // (2) Using Echo
   echo App_name." ".Author."\n";

   // (2) Using Print
   print(App_name ." ".Author."\n");

   // (2) Using Printf
   printf(App_name." ". Author."\n");

   // (3) Variable names
   $food= 12;
   $transport = 20;
   $other_expenses = 90;
   
   // (4) Total and Average Expenses
   $total = $food + $transport + $other_expenses;
   $avarage_expenses = $total/3;

   // (5) IF else conditions
   if($total>1000){
    echo "Budget Exceeded";
   }
   else{
    echo "Within Budget";
   }

   // (6) Ternary Operator
   echo($total>1000) ? "Budget Exceeded" : "Within Budget"."\n";
  
   // (6) Switch Case
   switch(true){
    case ($total>1000):
        echo "Budget Exceeded"."\n";
        break;
    default:
        echo "Within Budget"."\n"; 
   }

   // (7) Total Expense Function
   function total_expense($x,$y,$z): int{
      return $x +$y +$z;
   }
   echo total_expense($food, $transport, $other_expenses)."\n";


   // (8) Budget Checker Function
   function budget_check($total){
    echo($total>1000) ? "Budget Exceeded" : "Within Budget";
   }







?>
