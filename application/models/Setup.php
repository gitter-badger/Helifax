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
      
    }
    
    function TBL_Burgerslachtoffers() {
      
    }
    
    function TBL_Begraafplaatsen() {
      
    }
  }
