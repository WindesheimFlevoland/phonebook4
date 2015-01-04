<?php

session_start();

include("model/Person.php");
include("db/QyManager.php");
include("db/DbManager.php");

// Is er een bestaande sessie ?

if (isset($_SESSION['phonebook'])) {
    $phonebook = unserialize($_SESSION['phonebook']);
} else {
    $qm = new QyManager();
    $phonebook = $qm->getPersons(); 
  
    $_SESSION['phonebook'] = serialize($phonebook);
  }

// Zijn er nieuwe contactgegevens ?

if (isset($_POST['name']) && isset($_POST['phonenumber'])) {
    $person = new Person();
    $person->setName($_POST['name']);
    $person->setPhonenumber($_POST['phonenumber']);
    $phonebook[] = $person;
    
    $_SESSION['phonebook'] = serialize($phonebook);
} 

header("Location:view/view.php");
?>
