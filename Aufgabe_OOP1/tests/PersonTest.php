<?php
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /** @var Person */
    private $person;

    protected function setUp()
    {
        $this->person = new Person('lastname', 'firstname', new \DateTime('19.07.1998'));
    }

    public function testGetFirstnameReturnsFirstnameInsertedByConstructor()
    {
        $this->assertSame('firstname', $this->person->getFirstName());
    }

    public function testGetLastnameReturnsLastNameInsertedByConstructor()
    {
        $this->assertSame('lastname', $this->person->getLastName());
    }

    public function testGetDateOfBirthReturnsDateofBirthInsertedByCunstructor()
    {
        $this->assertSame('19-07-1998', date_format($this->person->getDateOfBirth(), 'd-m-Y'));
    }

    public function testSetNameSetsLastNameInsertedBySetter()
    {
        $this->person->setName('lastname');
        $this->assertSame('lastname', $this->person->getLastName());
    }

    public function testGetAddressReturnsAddressInsertedBySetter()
    {
        $this->person->setAdress('address');
        $this->assertSame('address', $this->person->getAdress());
    }

    public function testGetPostalCodeReturnsPostalCodeInsertedBySetter()
    {
        $this->person->setPostalCode(5213);
        $this->assertSame(5213, $this->person->getPostalCode());
    }

    public function testSetPostalCodeIsValidatingPostalCodeAndThrowsException()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('invalid postalcode');
        $this->person->setPostalCode(23225);
    }

    public function testGetCityReturnsCityInsertedBySetter()
    {
        $this->person->setCity('city');
        $this->assertSame('city', $this->person->getCity());
    }

    public function testGetNumberSetsAskedAlreadyToTrue()
    {
        $this->person->setNumber('0787057120');
        $this->person->getNumber();
        $this->assertSame(true, $this->person->getAskedAlready());
    }

    public function testGetNumberReturnsNumberInsertedBySetter()
    {
        $this->person->setNumber('0787057120');
        $this->assertSame('0787057120', $this->person->getNumber());
    }

    public function testGetColorReturnsColorInsertedBySetter()
    {
        $this->person->setColor('Pink');
        $this->assertSame('Pink', $this->person->getColor());
    }

    public function testGetAskedAlreadyReturnsFalseIfNotAskedAlready()
    {
        $this->assertSame(false,  $this->person->getAskedAlready());
    }

    public function testGetFullNameReturnsCorrectlyCombinedString()
    {
        $this->assertSame('lastname firstname', $this->person->getFullName());
    }

    public function testGetFullAddressReturnsCorrectlyCombinedString()
    {
        $this->person->setAdress('address');
        $this->person->setPostalCode(1111);
        $this->person->setCity('city');
        $this->assertSame('address 1111 city', $this->person->getFullAdress());
    }

    public function testGetAgeReturnCorrectAge()
    {
        $this->assertSame(19, $this->person->getAge());
    }
}
