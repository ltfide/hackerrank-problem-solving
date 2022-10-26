package hackerrank.easy;

import java.math.BigInteger;

import org.junit.jupiter.api.Test;

public class BigIntegerTest {
   
   @Test
   void testBigInteger() {
      var a = "123456789123456789";
      var b = "100000000000000000";

      BigInteger A = new BigInteger(a);
      BigInteger B = new BigInteger(b);
      
      System.out.println(A.add(B));
      System.out.println(A.multiply(B));
      System.out.println(A.divide(B));
   }

}
