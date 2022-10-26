package hackerrank.easy;

import java.text.NumberFormat;
import java.util.Locale;

import org.junit.jupiter.api.Test;

public class CurrencyFormatterTest {

   @Test
   void testCurrencyFormatter() {
      double sampleInput = 12324.134;

      NumberFormat us = NumberFormat.getCurrencyInstance(Locale.US);
      NumberFormat india = NumberFormat.getCurrencyInstance(new Locale("en", "IN"));
      NumberFormat china = NumberFormat.getCurrencyInstance(Locale.CHINA);
      NumberFormat france = NumberFormat.getCurrencyInstance(Locale.FRANCE);

      System.out.println("US: " + us.format(sampleInput));
      System.out.println("India: " + india.format(sampleInput));
      System.out.println("China: " + china.format(sampleInput));
      System.out.println("France: " + france.format(sampleInput));
   }

}
