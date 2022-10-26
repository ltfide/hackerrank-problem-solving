package hackerrank.easy;

import java.util.Arrays;

import static org.junit.jupiter.api.Assertions.*;
import org.junit.jupiter.api.Test;

public class AnagramsTest {

   static boolean isAnagrams(String strA, String strB) {
      char[] tempArrayA = strA.toLowerCase().toCharArray();
      char[] tempArrayB = strB.toLowerCase().toCharArray();

      Arrays.sort(tempArrayA);
      Arrays.sort(tempArrayB);

      return String.valueOf(tempArrayA)
               .equals(String.valueOf(tempArrayB));
   }
   
   @Test
   void testAnagrams() {
      System.out.println(isAnagrams("anagram", "margana"));

      assertTrue(isAnagrams("anagram", "margana"));
      assertFalse(isAnagrams("anagramm", "marganaa"));
   }

}
