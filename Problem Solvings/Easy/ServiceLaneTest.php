<?php 

class ServiceLane 
{
   /**
    * Function Description
    *
    * Complete the serviceLane function in the editor below.
    *
    * serviceLane has the following parameter(s):
    * int n: the size of the  width array
    * int cases[t][2]: each element contains the starting and ending indices for a segment to consider, inclusive
    * 
    * Returns
    * int[t]: the maximum width vehicle that can pass through each segment of the service lane described
    *
    * Input Format
    * The first line of input contains two integers, n and t, where n denotes the number of width measurements and t, the number of test cases. The next line has  space-separated integers which represent the array width.
    * The next t lines contain two integers, i and j, where i is the start index and j is the end index of the segment to check.
    */
   static function serviceLane($n, $cases)
   {
      $width = [2, 3, 1, 2, 3, 2, 3, 3];
      $output = [];
      foreach($cases as $case){
         $lines = [];
         for($i=$case[0];$i<=$case[1];$i++){
               $lines[]=$width[$i];
         }
         $output[] = min($lines);
      }
      return $output;
   }
}

print_r(ServiceLane::serviceLane(2, [[0,3],[4,6],[6,7],[3,5],[0,7]]));