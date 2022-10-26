package hackerrank.easy;

import java.util.Scanner;

import org.junit.jupiter.api.Test;

public class EndOfLineTest {
   
   @Test
   void testEndOfLine() {
      Scanner scanner = new Scanner(System.in);
      String userName;
      userName = scanner.nextLine();
      if (scanner.hasNextLine()) {
         System.out.println("OK");
      }
      System.out.println("TEST: " + userName);
      scanner.close();
   }

}
