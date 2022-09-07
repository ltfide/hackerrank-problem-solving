<?php 

class LisaWorkbook
{
   static function workbook($n, $k, $arr)
   { 
      $page = 0;
      $specialProblems = 0; 

      for ($i=1; $i <= $n; $i++) { 
         $currElement = $arr[$i - 1]; 
         $count = 0; 
         $page++;
         for ($j = 1; $j <= $currElement; $j++) { 
            if ($count === $k) {
               $page++; 
               $count = 0;
            }
            $count++;
            if ($page === $j) {  
               echo $page . PHP_EOL;
               $specialProblems++;
            }
         }
      }

      return $specialProblems;
   }
}

print_r(LisaWorkbook::workbook(5,3,[4,2,6,1,10]));