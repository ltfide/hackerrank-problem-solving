package hackerrank.easy;

import static org.junit.jupiter.api.Assertions.*;
import org.junit.jupiter.api.Test;

public class ValidUsernameRegexTest {

   private final static String REGEXP = "^[a-zA-Z]\\w{7,29}$";

   static String isValid(String input) {
      return (input.matches(REGEXP)) ? "Valid" : "Invalid";
   }
   
   @Test
   void testValidUsernameRegex() {
      assertEquals("Invalid", isValid("Julia"));
      assertEquals("Valid", isValid("Samantha"));
      assertEquals("Valid", isValid("Samantha_21"));
      assertEquals("Invalid", isValid("1Samantha"));
      assertEquals("Invalid", isValid("Samantha?10_2A"));
      assertEquals("Valid", isValid("JuliaZ007"));
      assertEquals("Invalid", isValid("Julia@007"));
      assertEquals("Invalid", isValid("_Julia007"));
   }

}
