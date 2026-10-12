   <?php

   use PHPUnit\Framework\TestCase;

   class ExampleTest extends TestCase
   {
       public function testTrueIsTrue()
       {
           // Намеренно делаем утверждение ложным
           $this->assertTrue(true); 
       }
   }