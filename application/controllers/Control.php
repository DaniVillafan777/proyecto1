<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Fpdf\Fpdf;
class Control extends CI_Controller {

	// private $pdf;
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->library('pdf');
		$this->load->model('modelo1');
		// $db = $this->load->database('default', TRUE);
		// return var_dump($db->get('users')->result_array());
		// return $this->modelo1->consultar();
		$this->pdf->index();
	}
	public function hola($txt)
	{
		// return var_dump($txt);
		// $this->load->model('modelo1');
		// $datos = $this->modelo1->consultar();
		echo "hola $txt";
	}
}
