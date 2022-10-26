package hackerrank.easy;

import java.text.Format;
import java.text.SimpleDateFormat;
import java.util.Calendar;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class DateTimeBasicTest {
   
   static String findDay(int month, int day, int year) {
      Calendar calendar = Calendar.getInstance();

      calendar.set(Calendar.YEAR, year);
      calendar.set(Calendar.MONTH, (month - 1));
      calendar.set(Calendar.DAY_OF_MONTH, day);

      Format format = new SimpleDateFormat("EEEE");
      String result = format.format(calendar.getTime()).toUpperCase();
      return result;
   }

   @Test
   void testFindDay() {
      String test1 = findDay(8, 14, 2017);
      String test2 = findDay(10, 11, 2022);

      Assertions.assertEquals("MONDAY", test1);
      Assertions.assertEquals("TUESDAY", test2);
   }
   
}
