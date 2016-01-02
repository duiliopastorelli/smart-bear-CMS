<?php
use SmartBear\Address;

class AddressTest extends PHPUnit_Framework_TestCase
{
    /**
    * Some mock data to reuse accross the test routine
    * @var [Array]
    */
    public $mock_answer = "Address!";

    /**
    * @test
    * Make sure PHPUnit is working before proceeding
    */
    public function testPHPUnit()
    {
        $this->assertEquals(1, 1);
    }

    /**
    * @test
    * Check if the the class Address return the right page
    */
    public $mock_getAddressPages = array(
        array(
            'p' => '1',
            'p' => '0',
            'p' => '12424546'
        ));

    public function testGetAddressPage()
    {
        foreach ($this->mock_getAddressPages as $page) {
            $address = new Address($page);
            $this->assertEquals("single", $address->getAddress($page), " ==> Failed to test the Page.");
        }
    }

    /**
    * @test
    * Check if the the class Address return the right cat
    */
    public $mock_getAddressCat = array(
        array(
            'cat' => 'cat1',
            'cat' => 'cat2'
        ));

    public function testGetAddressCat()
    {
        foreach ($this->mock_getAddressCat as $cat) {
            $address = new Address($cat);
            $this->assertEquals("cat", $address->getAddress($cat), " ==> Failed to test the Cat.");
        }
    }
}
