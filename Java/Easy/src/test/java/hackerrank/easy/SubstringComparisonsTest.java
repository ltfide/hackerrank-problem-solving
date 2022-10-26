package hackerrank.easy;

import org.junit.jupiter.api.Test;

public class SubstringComparisonsTest {
   
   static int stringCompare(String str1, String str2) {
      for (int i = 0; i < str1.length() && 
                  i < str2.length(); i++) {
         if ((int) str1.charAt(i) == (int) str2.charAt(i)) {
            continue;
         } else {
            return (int) str1.charAt(i) - (int) str2.charAt(i);
         }
      }

      // Edge case for strings like
      // String 1 = "Geeky" and String 2 = "Geekyguy"
      if (str1.length() < str2.length()) {
         return (str1.length() - str2.length());
      } else if (str1.length() > str2.length()) {
         return (str1.length() - str2.length());
      } 
      // If none of the above conditions is true,
      // it implies both the strings are equal
      else {
         return 0;
      }
   }

   static String getSmallestAndLargest(String s, int k) {
      String smallest = s.substring(0, k);
      String largest = "";

      for (int i = 0; i <= s.length()-k; i++) {
         if ((s.substring(i, i+k).compareTo(smallest)) <= 0) {
            smallest = s.substring(i, i+k);
            System.out.println("Smalles: " + smallest);
         }
         if ((s.substring(i, i+k).compareTo(largest)) >= 0) {
            largest = s.substring(i, i+k);
            System.out.println("Largest: " + largest);
         }
      }
      return smallest + "\n" + largest;
   }

   @Test
   void testSubstringComparison() {
      String str1 = new String("Ab");
      String str2 = new String("AB");

      String input = "welcometojava";
      String output = getSmallestAndLargest(input, 3);

      System.out.println("lco".compareTo("elc"));
      System.out.println(stringCompare(str1, str2));
      System.out.println(output);
   }

}
