package hackerrank.easy;

import org.junit.jupiter.api.Test;

public class AreaOfParallelogramTest {
   
   static void breadthAndHeight(int a, int b) {
      try {
         if (a > 0 && b > 0) {
            System.out.println(a * b);
         } else {
            throw new Exception("Breadth and height must be positive");
         } 
      } catch (Exception e) {
         System.out.println(e.getMessage());
      }
   }

   @Test
   void testAreaOfParallelogramTest() {
      breadthAndHeight(1, -1);
   }

}
