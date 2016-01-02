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
    * Check if the the class Address return the home page
    */
    public $mock_getAddressHome = array();

    public function testGetAddressHome()
    {
        $address = new Address($home);
        $this->assertEquals("home", $address->getAddress($this->mock_getAddressHome), " ==> Failed to test the Home Page.");
    }

    /**
    * @test
    * Check if the the class Address return the right page
    */
    public $mock_getAddressPages = array(
        array('p' => '1'),
        array('p' => '9'),
        array('p' => '2398573589'),
    );

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
        array('cat' => 'cat1'),
        array('cat' => 'cat2'),
    );

    public function testGetAddressCat()
    {
        foreach ($this->mock_getAddressCat as $cat) {
            $address = new Address($cat);
            $this->assertEquals("cat", $address->getAddress($cat), " ==> Failed to test the Cat.");
        }
    }
}
