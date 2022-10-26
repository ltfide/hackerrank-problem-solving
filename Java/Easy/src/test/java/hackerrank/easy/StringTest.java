package hackerrank.easy;

import org.junit.jupiter.api.Test;

public class StringTest {
   
   @Test
   void testCustomString() {
      String a = "hello";
      String b = "java";
      String xy;

      if (a.compareTo(b) > 0) {
         xy = "Yes";
      } else {
         xy = "No";  
      }
      
      System.out.println(a.length() + b.length());
      System.out.println(xy);
      System.out.println(a.toUpperCase().charAt(0) + a.substring(1, a.length()) + " " + b.toUpperCase().charAt(0) + b.substring(1, b.length()));
   }

}
