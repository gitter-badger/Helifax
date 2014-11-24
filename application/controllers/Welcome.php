<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Welcome extends CI_Controller {
		public function __construct() {
    	parent::__construct();
    	$this->load->dbutil(); 
    	$this->load->model('Setup');
    	
    }
       
		public function index() {
			$Data['Title'] = "Helifax | Home";
			
			$this->load->view('components/header', $Data);
			$this->load->view('components/navbar');
			$this->load->view('results');
			$this->load->view('components/footer');
		}
		
		public function Setup() {
			$Data['Title'] = "Helifax | Results";
			
			// Build database
			if($this->dbutil->database_exists('FallenSoldiers')) {
				
			} else {
				$CreateDB    = $this->Setup->CreateDB();
				$CreateTBL_1 = $this->Setup->TBL_Regimenten();
				$CreateTBL_2 = $this->Setup->TBL_Gesneuvelde();
				$CreateTBL_3 = $this->Setup->TBL_Burgerslachtoffers();
				$CreateTBL_4 = $this->Setup->TBL_Begraafplaatsen();
			}
			
			// Views
			$this->load->view('components/header', $Data);
			$this->load->view('components/navbar');
			$this->load->view('results');
			$this->load->view('components/footer');
		}
	}
