<?php
Class notapdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'NOTA BELANJA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'TOKO KELONTONG',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Jl. Diponegoro No.54 Madiun',0,1,'C');
        $pdf->SetLineWidth(1);
        $pdf->Line(10,36,200,36);
    //    $pdf->Cell(190,7,'_________

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetMargins(25.4,0, 25.4);
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','',10);

        $nota = $this->db->query("SELECT * FROM penjualan, nota 
            WHERE penjualan.idPenjualan=nota.idPenjualan ORDER BY idNota DESC LIMIT 1" )->result();
        foreach ($nota as $row){
            $pdf->Cell(42,6,'Nama Pelanggan             :',0,0,'');
            $pdf->Cell(42,6,$row->nama_pelanggan,0,1);

            $pdf->Cell(42,6,'Tgl.                                   :',0,0,'');
            $pdf->Cell(20,6,$row->tanggal,0,1);

            $pdf->Cell(42,6,'Total                                 :                     ',0,0,'');
            $pdf->Cell(42,6,$row->total.'000',0,1);

            $pdf->Cell(42,6,'Bayar                               :',0,0,'');
            $pdf->Cell(20,6,$row->bayar,0,1);

            $pdf->Cell(42,6,'Kembali                           :',0,0,'');
            $pdf->Cell(20,6,$row->kembali.'000',0,1);
            
        }

        $pdf->Output();


    }
}