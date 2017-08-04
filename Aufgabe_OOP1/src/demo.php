<?php
include 'Person.php';

function printPerson(Person $person)
{
    echo 'Full name: ' . $person->getFullName() . PHP_EOL;
    echo 'Full adress: ' . $person->getFullAdress() . PHP_EOL;
    echo 'Date of birth: ' . date_format($person->getDateOfBirth(),'l\, jS F Y') . PHP_EOL;
    echo 'Age: ' . $person->getAge() . PHP_EOL;
    echo 'Number: ' . $person->getNumber() . PHP_EOL;
    echo 'Asked for number: ';
    echo $person->getAskedAlready() ? 'true' : 'false';
    echo PHP_EOL . 'Color: ' . $person->getColor() . PHP_EOL . PHP_EOL;
}

$wsu = new Person(  'Sudarta', 'Wijaya', new DateTime('1998-07-19'));
$wsu->setAdress('Oberdorfstrasse 6a');
$wsu->setPostalCode(5213);
$wsu->setCity('Villnachern');
$wsu->setNumber('0787057120');
$wsu->setColor('Pink');

$tsu = new Person(  'Sudarta', 'Tim', new DateTime('2001-07-12'));
$tsu->setAdress('Oberdorfstrasse 6a');
try {
    $tsu->setPostalCode(52133);
} catch (Exception $e){
    echo $e->getMessage() . PHP_EOL;
}
$tsu->setCity('Villnachern');
$tsu->setNumber('0785648235');
$tsu->setColor('Green');

printPerson($wsu);
printPerson($tsu);

$wsu->setAdress('Oberdorfstrasse 6a');
$wsu->setPostalCode(5213);
$wsu->setCity('Villnachern');


echo '/' . $wsu->getFullAdress() . '/';
?>