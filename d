[33mcommit a472ce685e88b7a70dfa572328f9368c32950ccf[m[33m ([m[1;36mHEAD -> [m[1;32mmain[m[33m)[m
Author: ltfide <lutfidendians@gmail.com>
Date:   Wed Aug 24 06:15:43 2022 +0700

    beautiful triplets

[1mdiff --git a/Problem Solvings/Easy/BeautifulTripletsTest.php b/Problem Solvings/Easy/BeautifulTripletsTest.php[m
[1mnew file mode 100644[m
[1mindex 0000000..d7c97c0[m
[1m--- /dev/null[m
[1m+++ b/Problem Solvings/Easy/BeautifulTripletsTest.php[m	
[36m@@ -0,0 +1,46 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32muse PHPUnit\Framework\TestCase;[m
[32m+[m
[32m+[m[32mclass BeautifulTriplets[m
[32m+[m[32m{[m
[32m+[m[32m   /**[m
[32m+[m[32m    * Function Description[m
[32m+[m[32m    *[m
[32m+[m[32m    * Complete the beautifulTriplets function in the editor below.[m
[32m+[m[32m    *[m
[32m+[m[32m    * beautifulTriplets has the following parameters:[m
[32m+[m[32m    * int d: the value to match[m
[32m+[m[32m    * int arr[n]: the sequence, sorted ascending[m
[32m+[m[32m    *[m
[32m+[m[32m    * Returns[m
[32m+[m[32m    * int: the number of beautiful triplets[m
[32m+[m[32m    *[m
[32m+[m[32m    * Input Format[m
[32m+[m[32m    * The first line contains 2 space-separated integers, n and d, the length of the sequence and the beautiful difference.[m
[32m+[m[32m    * The second line contains n space-separated integers arr[i].[m
[32m+[m[32m   */[m
[32m+[m[32m   static function beautifulTriplets(int $d, array $arr)[m
[32m+[m[32m   {[m
[32m+[m[32m      $count = 0;[m
[32m+[m[32m      for ($i=0; $i < count($arr); $i++) {[m[41m [m
[32m+[m[32m         // 1+3=4 && 1+3+3=7[m
[32m+[m[32m         // 2+3=5 && 2+3+3=8[m
[32m+[m[32m         // 4+3=7 && 4+3+3=10[m
[32m+[m[32m         // 5+3=8 && 5+3+3=11[m
[32m+[m[32m         if(in_array($arr[$i]+$d, $arr) && in_array($arr[$i]+$d+$d, $arr)) {[m
[32m+[m[32m            $count++;[m
[32m+[m[32m         }[m
[32m+[m[32m      }[m
[32m+[m[32m      return $count;[m
[32m+[m[32m   }[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32mclass BeautifulTripletsTest extends TestCase[m
[32m+[m[32m{[m
[32m+[m[32m   public function test_beautiful_triplets_success()[m
[32m+[m[32m   {[m
[32m+[m[32m      $this->assertEquals(3, BeautifulTriplets::beautifulTriplets(1, [2,2,3,4,5]));[m
[32m+[m[32m      $this->assertEquals(3, BeautifulTriplets::beautifulTriplets(3, [1,2,4,5,7,8,10]));[m
[32m+[m[32m   }[m
[32m+[m[32m}[m
\ No newline at end of file[m
[1mdiff --git a/Problem Solvings/vendor/bin/.phpunit.result.cache b/Problem Solvings/vendor/bin/.phpunit.result.cache[m
[1mindex 3818747..944a730 100644[m
[1m--- a/Problem Solvings/vendor/bin/.phpunit.result.cache[m	
[1m+++ b/Problem Solvings/vendor/bin/.phpunit.result.cache[m	
[36m@@ -1 +1 @@[m
[31m-{"version":1,"defects":{"HelloWorldTest::testHelloWorld":3,"ElectronicsShopTest::testElectronicsShop":3,"PickingNumbersTest::testPickingNum":3,"AngryProfessorTest::testAngryProfessor":3,"BeautifulDaysTest::testBeuatifulDays":3,"ViralAdvertisingTest::testViralAdvertising":3,"SaveThePrisonersTest::testSaveThePrisoners":3,"LibraryFineTest::test_library_fine_success":3,"JumpingOnTheCloudsTest::test_jumping_on_the_clouds_success":3,"RepeatedStringTest::test_repeated_string_success":3,"GameOfThronesTest::test_game_of_thrones_success":3},"times":{"HelloWorldTest::testHelloWorld":0.101,"FindDigitsTest::testFindDigits":0.017,"CountingValleysTest::testCountingValleys":1.056,"ElectronicsShopTest::testElectronicsShop":0.009,"CatsAndMouseTest::testCatsAndMouse":0.016,"PickingNumbersTest::testPickingNum":0.015,"TheHurdleRaceTest::testHurdleRace":0.011,"DesignerPDFViewerTest::testDesignerPdfViewer":0.009,"UtopianTreeTest::testUtopianTree":0.009,"AngryProfessorTest::testAngryProfessor":0.014,"BeautifulDaysTest::testBeuatifulDays":0.009,"ViralAdvertisingTest::testViralAdvertising":0.011,"SaveThePrisonersTest::testSaveThePrisoners":0.469,"CamelCaseTest::testCamelCase":0.015,"LibraryFineTest::test_library_fine_success":0.009,"JumpingOnTheCloudsTest::test_jumping_on_the_clouds_success":0.082,"CutTheSticksTest::test_cut_sticks_success":0.521,"JumpingOnTheCloudsRevTest::test_jumping_on_the_clouds_success":0.533,"RepeatedStringTest::test_repeated_string_success":0.007,"HalloweenSaleTest::test_halloween_sale_success":0.014,"GameOfThronesTest::test_game_of_thrones_success":0.007,"TaumAndBdayTest::test_taum_and_bday_success":0.438}}[m
\ No newline at end of file[m
[32m+[m[32m{"version":1,"defects":{"HelloWorldTest::testHelloWorld":3,"ElectronicsShopTest::testElectronicsShop":3,"PickingNumbersTest::testPickingNum":3,"AngryProfessorTest::testAngryProfessor":3,"BeautifulDaysTest::testBeuatifulDays":3,"ViralAdvertisingTest::testViralAdvertising":3,"SaveThePrisonersTest::testSaveThePrisoners":3,"LibraryFineTest::test_library_fine_success":3,"JumpingOnTheCloudsTest::test_jumping_on_the_clouds_success":3,"RepeatedStringTest::test_repeated_string_success":3,"GameOfThronesTest::test_game_of_thrones_success":3},"times":{"HelloWorldTest::testHelloWorld":0.101,"FindDigitsTest::testFindDigits":0.017,"CountingValleysTest::testCountingValleys":1.056,"ElectronicsShopTest::testElectronicsShop":0.009,"CatsAndMouseTest::testCatsAndMouse":0.016,"PickingNumbersTest::testPickingNum":0.015,"TheHurdleRaceTest::testHurdleRace":0.011,"DesignerPDFViewerTest::testDesignerPdfViewer":0.009,"UtopianTreeTest::testUtopianTree":0.009,"AngryProfessorTest::testAngryProfessor":0.014,"BeautifulDaysTest::testBeuatifulDays":0.009,"ViralAdvertisingTest::testViralAdvertising":0.011,"SaveThePrisonersTest::testSaveThePrisoners":0.469,"CamelCaseTest::testCamelCase":0.015,"LibraryFineTest::test_library_fine_success":0.009,"JumpingOnTheCloudsTest::test_jumping_on_the_clouds_success":0.082,"CutTheSticksTest::test_cut_sticks_success":0.521,"JumpingOnTheCloudsRevTest::test_jumping_on_the_clouds_success":0.533,"RepeatedStringTest::test_repeated_string_success":0.007,"HalloweenSaleTest::test_halloween_sale_success":0.014,"GameOfThronesTest::test_game_of_thrones_success":0.007,"TaumAndBdayTest::test_taum_and_bday_success":0.438,"BeautifulTripletsTest::test_beautiful_triplets_success":0.517}}[m
\ No newline at end of file[m
