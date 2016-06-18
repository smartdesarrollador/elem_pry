<?php
$cnx=mysql_connect('localhost','root','root');
mysql_select_db('php_mvc');
$sql="select id,alupat,alumat,alunom from alumnos";
$datos=mysql_query($sql);
if(mysql_num_rows($datos)>0){
	while($fila=mysql_fetch_row($datos)){
		$rpta[]=$fila;
	}
}
?>
<?php
include("fpdf.php");
class mvc_pdf extends FPDF{
    #---------------------------------
    function Header(){
        $this->Image("1.jpg",10,10,15);
        $this->SetFont("Arial","",9);
        $this->Cell(15);$this->Cell(30,4,"Sistemas UNI",0,1,"L");
        $this->Cell(15);$this->Cell(30,4,"Aplicaciones Web",0,1,"L");
        $this->Cell(15);$this->Cell(30,4,"PHP Empresarial",0,1,"L");
        
        $this->SetY(10);
        $this->Cell("190",4,"Fecha : ". date('Y/m/d'),0,1,"R");
        $this->Cell("190",4,"Hora : ". date('H:i:s'),0,1,"R");
        
        $this->Ln(10);
        
        $this->Cell(0,4,"Titulo Reporte","BT",1,"C");
        $this->Ln(20);
    }
    #---------------------------------
    function Footer(){
        $this->SetY(-15);
        $this->SetFont("Arial","I",8);
        $this->Cell(0,7,'Página : '. $this->PageNo() . '/{nb}',"T",0,'C');
    }
    #---------------------------------
    function Tabla($anchos,$cabecera,$datos){
        $p=0;
        $this->SetFillColor(120,120,200);
        foreach($cabecera as $texto){
            $this->Cell($anchos[$p],6,$texto,1,0,"C",true);
            $p++;
        }
        $this->Ln();
        foreach($datos as $aaa=>$bbb){
            $p=0;
            foreach($bbb as $ind=>$val){
                $this->Cell($anchos[$p],6,$val,1,0,"L");
                $p++;
            }
            $this->Ln();
        }
    }
}

$pdf=new mvc_pdf();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
##############
$anchos=array(7,30,30,40);
$cabecera=array("itm","Paterno","Materno","Nombres");
$pdf->Tabla($anchos,$cabecera,$rpta);
##############
/*
for($i=1;$i<=50;$i++){
    $pdf->Cell(0,10,"Linea $i.",0,1);
}
*/
//$pdf->Output();
$pdf->Output("Reporte.pdf","D");
?>