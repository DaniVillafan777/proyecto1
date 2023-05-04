<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Fpdf\Fpdf;
// use Modelos\Modelo1;
// use Tabla\Tabla;
// use Complementos\Tabla;
require 'mc_table.php';
require 'Complementos_fpdf.php';
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
		$this->SetDrawColor(255,255,255);
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
			'Fecha',
			'Nombre',
			'Firma'
		]);
		$ci = &get_instance();
		$ci->load->model('modelo1');
		$rows = $ci->modelo1->consultar();
		// echo '<pre>';
		// var_dump($rows);
		foreach ($rows as $row) {
			// var_dump($row);
			$this->Row([
				$row['id'],
				$row['username'],
				$row['correo']
			]);
				// foreach ($row as $column) {
				// 	$pdf->Cell(40,10,$column,1);
				// }
				// 	$this->Ln(2);
		}
		// exit;
		$this->SetDrawColor(0,92,169,255);
		$this->SetLineWidth(.8);
		$this->Line(10, 55, 200, 55);
		$this->Ln(10);
		// $this->SetDrawColor(255,255,255);
		// $this->SetWidths([36, 150]);
		// $this->SetAligns(['L', 'L']);
		// $this->Row([
		// 	'a',
		// 	'b'
		// ]);
		$y = $this->GetY();
		$this->SetDrawColor(0,92,169,255);
		$this->SetLineWidth(.8);
		$this->Line(10, $y, 200, $y);
		// $this->Ln(7);
		// $this->SetDrawColor(255,255,255);
		// $this->SetWidths([26.5, 26.5, 26.5, 26.5, 26.5, 26.5, 26.5]);
		// // $this->SetFillColor(255, 255, 255);
		// $this->SetAligns(['L', 'L']);
		// $this->Row([
		// 	'11111111',
		// 	'bbbbbbbb',
		// 	'cccccccc',
		// 	'dddddddd',
		// 	'eeeeeeee',
		// 	'ffffffff',
		// 	'gggggggg'
		// ]);
		// $this->Row([
		// 	'2222222',
		// 	'ccccccc',
		// 	'ddddddd',
		// 	'eeeeeee',
		// 	'fffffff',
		// 	'ggggggg',
		// 	'asdasda'
		// ]);
		// $this->Row([
		// 	'3',
		// 	'b',
		// 	'c',
		// 	'd',
		// 	'e',
		// 	'f',
		// 	'g'
		// ]);
		// $this->Row([
		// 	'4',
		// 	'b',
		// 	'c',
		// 	'd',
		// 	'e',
		// 	'f',
		// 	'g'
		// ]);
		// $z=5+$this->GetY();
		// $this->SetDrawColor(0,92,169,255);
		// $this->SetLineWidth(.8);
		// $this->Line(10, $z, 200, $z);

		// $this->SetDrawColor(0,92,169,255);
		// $this->SetLineWidth(.8);
		// $this->Line(10, $z+10, 200, $z+10);
		// $this->Ln(20);
		// $this->SetDrawColor(255,255,255);
		// $this->SetWidths([26.5, 26.5, 26.5, 26.5, 26.5, 26.5, 26.5]);
		// $this->SetAligns(['L', 'L']);
		// $this->Row([
		// 	'a',
		// 	'b',
		// 	'c',
		// 	'd',
		// 	'e',
		// 	'f',
		// 	'g'
		// ]);
		$this->Output();
	}
}