<?php

use PHPUnit\Framework\TestCase;

class DesignerPDFViewer
{
   /*
   * Complete the 'designerPdfViewer' function below.
   *
   * The function is expected to return an INTEGER.
   * The function accepts following parameters:
   *  1. INTEGER_ARRAY h
   *  2. STRING word
   */
   static function designerPdfViewer($h, $word) 
   {
      // Solution 1
      // $alphabet = 'abcdefghijklmnopqrstuvwxyz';
      // $result = [];
      // for ($i=0; $i < strlen($word); $i++) { 
      //    $index = array_search($word[$i], str_split($alphabet));
      //    $result[] = $h[$index];
      // }
      // return max($result) * strlen($word);

      $highest = 0;
      for ($i=0; $i < strlen($word); $i++) { 
         $index = ord($word[$i]) - 97;
         $size = $h[$index];
         if ($size > $highest) {
            $highest = $size;
         }
      }
      return $highest * strlen($word);
   }
}

// print_r(DesignerPDFViewer::designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], 'abc'));
// print_r(DesignerPDFViewer::designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba'));

class DesignerPDFViewerTest extends TestCase
{
   public function testDesignerPdfViewer()
   {
      $this->assertEquals(9, DesignerPDFViewer::designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], 'abc'));
      $this->assertEquals(28, DesignerPDFViewer::designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba'));
   }
}