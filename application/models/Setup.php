<?php 
  Class Setup extends CI_Model() {
    function CreateDB() {
      $this->dbforge->create_database('FallenSoldiers')
    }

    function TBL_Regimenten() {
      $fields = array(
        'ID' => array(
          'type'           => 'int',
          'constraint'     => '11',
          'auto_increment' => TRUE,
          ),
          
        'Regiment' => array(
          'type'       => 'varchar',
          'constraint' => '450',
          'default'    => 'Onbekend',
          ), 
          
        'Added' => array(
         'type'       => 'varchar',
         'constraint' => '50',
         'default'    => 'Onbekend',
         ),
      );
      
      // Build and send to server
      $this->dbforge->add_field($fields);
      $this->dbforge->add_key('ID', TRUE);
      $this->dbforge->create_table('Regimenten');
    }
 
    function TBL_Gesneuvelde() {
      $this->dbforge->add_field("PID int(11) unsigned NOT NULL AUTO_INCREMENT");
      $this->dbforge->add_field("Voornaam VARCHAR(255) DEFAULT 'Niet gekend'");
      $this->dbforge->add_field("Achternaam VARCHAR(45) DEFAULT 'Niet gekend'");
      $this->dbforge->add_field("Burgerlijke_stand VARCHAR(255) DEFAULT NULL");
      $this->dbforge->add_field("Stam_nr VARCHAR(30) DEFAULT NULL");
      $this->dbforge->add_field('RegimentID INT(11) DEFAULT NULL');
      $this->dbforge->add_field('Geboren_datum VARCHAR(45) DEFAULT NULL');
      $this->dbforge->add_field('Geboren_plaats VARCHAR(200) DEFAULT NULL');
      $this->dbforge->add_field('Overleden_datum VARCHAR(45) DEFAULT NULL');
      $this->dbforge->add_field('Overleden_plaats VARCHAR(400) DEFAULT NULL');
      $this->dbforge->add_field('Doodsoorzaak TEXT');
      $this->dbforge->add_field('HerdenkingID INT(11) DEFAULT NULL');
      $this->dbforge->add_field('Added VARCHAR(70) DEFAULT NULL');
      $this->dbforge->add_field('Geslacht VARCHAR(45) DEFAULT NULL');
      $this->dbforge->add_field("Eenheid VARCHAR(255) DEFAULT 'Niet gekend'");
      $this->dbforge->add_field("Rang VARCHAR(45) DEFAULT 'Onbekend'");
      $this->dbforge->add_field("Graf_referentie VARCHAR(45) DEFAULT 'Onbekend'");
      $this->dbforge->add_field("Dienst VARCHAR(45) DEFAULT NULL");
      
      // Build and send to server
      $this->dbforge->add_key('PID', TRUE);
      $this->dbforge->create_table('Gesneuvelde');
    }
    
    function TBL_Burgerslachtoffers() {
      $this->dbforge->add_field("BID INT(11) NOT NULL AUTO_INCREMENT");
      $this->dbforge->add_field("Voornaam VARCHAR(255) DEFAULT 'Onbekend'");
      $this->dbforge->add_field("Achternaam VARCHAR(255) DEFAULT 'Onbekend'");
      $this->dbforge->add_field("Burgerlijke_stand VARCHAR(45) DEFAULT 'Onbekend'");
      $this->dbforge->add_field("Geboren_plaats VARCHAR(255) DEFAULT 'Onbekend'");
      $this->dbforge->add_field("Geboren_datum VARCHAR(255) DEFAULT NULL");
      $this->dbforge->add_field("Geslacht VARCHAR(10) DEFAULT NULL");
      $this->dbforge->add_field("Beroep VARCHAR(45) DEFAULT NULL");
      $this->dbforge->add_field("Werkgever VARCHAR(45) DEFAULT NULL");
      $this->dbforge->add_field("Overleden_plaats VARCHAR(45) DEFAULT NULL");
      $this->dbforge->add_field("Overleden_datum VARCHAR(45) DEFAULT NULL");
      $this->dbforge->add_field('Doodsoorzaak TEXT');
      $this->dbforge->add_field('Woonplaats_straat TEXT');
      $this->dbforge->add_field("Woonplaats_gemeente VARCHAR(45) DEFAULT NULL");
      $this->dbforge->add_field('HerdenkingID INT(11) DEFAULT NULL');
      
      // Build and send to server
      $this->dbforge->add_key('BID', TRUE);
      $this->dbforge->create_table('Burgerslachtoffers');
    }
    
    function TBL_Begraafplaatsen() {
      $this->dbforge->add_field('GID INT(11) NOT NULL AUTO_INCREMENT');
      $this->dbforge->add_field('Begraafplaats TEXT');
      $this->dbforge->add_field('Type VARCHAR(45) DEFAULT NULL');
      
      // Build and send to server
      $this->dbforge->add_key('GID', TRUE);
      $this->dbforge->create_table('Begraafplaatsen');
    }
  }
