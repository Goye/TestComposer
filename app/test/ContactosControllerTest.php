<?php 

use App\Controllers\ContactosController;

class ContactosControllerTest extends PHPUnit_Framework_TestCase {
  public function testSumNumbers()
  {
    $con = new ContactosController();
    $this->assertEquals(12, $con->sum(2,10));
  }
}