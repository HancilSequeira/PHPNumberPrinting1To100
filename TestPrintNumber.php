<?php
require('PrintNumber.php');

class TestPrintNumber extends PHPUnit_Framework_TestCase
{
    private $printNumber;

    protected function setUp()
    {
        $this->printNumber = new PrintNumber();
    }

    protected function tearDown()
    {
        $this->printNumber = NULL;
    }

    public function testPrintNumberUpTo100()
    {
        $result = $this->printNumber->printNumber(100);
        $this->assertEquals("Success", $result);
    }

    public function testPrintNumber200()
    {
        $result = $this->printNumber->printNumber(200);
        $this->assertEquals("Success", $result);
    }
}
