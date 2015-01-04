<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class QyManager {

    // ////////////////////////////////////// //
    // vind alle personen in het telefoonboek //
    // ////////////////////////////////////// //
    function QyManager() {

        $this->db = new DbManager();
    }

    public function getPersons() {

        $result = $this->db->doQuery("SELECT * FROM person");
        while ($row = $result->fetch_assoc()) {
            $persons[] = new Person($row['name'], $row['phonenumber']);
        }
        return $persons;
    }

    // //////////////////////////////////////
    // vind een persoon in het telefoonboek op basis van id
    // /////////////////////////////////////

    public function save(Person $p) {
        // nog in te vullen
    }

    public function update(Person $p) {
        // nog in te vullen
    }

    public function delete(Person $p) {
        // nog in te vullen
    }

    /*
      public static function findByID($id=0) {
      global $db; // breng de PHP variabele in de methode!
      // NIET MEER NODIG: $db = new DbManager();
      $result = $db->query("SELECT * FROM person WHERE person_id={$id} LIMIT 1");
      //helper:
      //$result = self::findBySQL("SELECT * FROM person WHERE person_id={$id} LIMIT 1");
      $row = $db->fetch_array($result);

      // OOP: map found record to a Person object, and return
      // TODO: CHECK row is record
      return (new Person($row['firstname'],$row['lastname'], $row['phonenumber']));
      }

      public static function findByFirstName($firstname) {
      global $db;
      $result = $db->query("SELECT * FROM person WHERE firstname LIKE '{$firstname}'");
      $row = $db->fetch_array($result);

      // map found record to a Person object, and return
      // TODO: CHECK row is record
      return (new Person($row['firstname'],$row['lastname'], $row['phonenumber']));
      }

     */
}
