<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Fpdf\Fpdf;
// use Tabla\Tabla;
// use Complementos\Tabla;
require 'mc_table.php';
class Pdf extends Tabla
{
	public function __construct()
    {
        parent::__construct();
    }
	public function Header()
	{
		$this->Rect(10, 0, 190, 7, 'F');
	}
	
	public function Footer()
	{
		$this->Rect(10, 290, 190, 7, 'F');
	}
	
    public function index()
	{
		$pdf = new Tabla();
		$this->SetFillColor(0,92,169,255);
		$this->AddPage();
		$this->SetFont('Times', 'B', 35);
		$this->SetY(15);
		$this->Cell(45,10, 'L Titulo', 0);
		$this->SetY(30);
		$this->SetFont('Times', '', 22);
		$this->Cell(10, 5, 'L Texto', 0);
		$this->Image('img/psg.jpeg',168,12,30,18);
		// $this->Image('',10,10,-300);
		// $this->SetX(10);
		// $this->SetY();
		// $this->Ln();
		// $this->Cell(5, 5, 1, 1, 0);
		// $this->Cell(20, 5, 'zdgxfd', 1, 0);
		// $x = $this->GetX();
		// $y = $this->GetY();
		// $this->Multicell(30, 5, 'esrdtgfhdasdvsdfghsafdgfhaetsgrhdsafcvdbfsdgfsegdsetrdyhstegr', 1, 'J');
		// // $this->Cell(30, 5, 'esrdtgfhdasdvsdfghsafdgfhaetsgrhdsafcvdbfsdgfsegdsetrdyhstegr', 1, 0);
		// $this->SetXY($x + 30, $y);
		// $this->Cell(134, 5, 'esrdtgfhdasdvsdfghsafdgfhaetsgrhdsafcvdbfsdgfsegdsetrdyhstegr', 1, 1);
		$this->Ln(10);
		$this->SetWidths([36, 45, 60]);
		$this->SetAligns(['C', 'C', 'C']);
		$this->Row([
			'a',
			'b',
			'c'
		]);
		$this->Rect(10, 54, 190, .8, 'F');
		$this->Ln(10);
		$this->SetWidths([36, 150]);
		$this->SetAligns(['L', 'L']);
		$this->Row([
			'a',
			'b'
		]);
		$this->Rect(10, 62, 190, .8, 'F');
		$this->Ln(15);
		$this->SetWidths([63, 63, 63]);
		$this->SetAligns(['L', 'L']);
		$this->Row([
			'a',
			'b',
			'c'
		]);





		$this->Output();

	}
	
}