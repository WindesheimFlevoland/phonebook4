<?php

/**
 * 
 * Description of Person
 *
 */
class Person {

    private $name;
    private $phonenumber;

    public function Person($name = null, $phonenumber = null) {
        if (isset($name))
            $this->name = $name;
        if (isset($phonenumber))
            $this->phonenumber = $phonenumber;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setPhonenumber($value) {
        $this->phonenumber = $value;
    }

    public function getPhonenumber() {
        return $this->phonenumber;
    }

    function getFirstName() {
        return $this->firstname;
    }

    function getLastName() {
        return $this->lastname;
    }

    // 2012_1213 returns full name of Person
    function getFullName() {
        if (isset($this->firstname) && isset($this->lastname)) {
            return $this->firstname . " " . $this->lastname;
        } else {
            return "";
        }
    }

}

// endof class