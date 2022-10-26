package hackerrank.easy;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class StringReverseTest {

   static String stringPalindrom(String str) {
      for (int i = 0; i < str.length()/2; i++) {
         if (str.charAt(i) != str.charAt(str.length()-1-i)) {
            return "No";
         }
      }
      return "Yes";
   } 

   @Test
   void testStringReverse() {
      String input = "madam";
      String output = stringPalindrom(input);

      System.out.println(output);
      Assertions.assertEquals("Yes", stringPalindrom("madam"));
      Assertions.assertEquals("No", stringPalindrom("not"));
   }
   
}
