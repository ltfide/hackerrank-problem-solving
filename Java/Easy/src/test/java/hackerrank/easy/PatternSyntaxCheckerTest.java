package hackerrank.easy;

import java.util.regex.Pattern;
import java.util.regex.PatternSyntaxException;

import org.junit.jupiter.api.Test;

public class PatternSyntaxCheckerTest {
   
   @Test
   void testPatternSyntaxChecker() {
      try {
         Pattern.compile("[AZ[a-z](a-z)");
         System.out.println("Valid");
      } catch (PatternSyntaxException e) {
         System.out.println("Invalid");
      }

   }

}
