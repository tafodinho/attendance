<?php
	require_once("../../fpdf/fpdf.php");
	include "../../core/connect.php";

	class PDF extends FPDF
	{
		function ChapterTitle(	$label)
		{
		    // Arial 12
		    $this->SetFont('Arial','B',12);
		    // Background color
		    $this->SetFillColor(200,220,255);
		    // Title
		    $this->Cell(0,6,"$label",0,1,'L', TRUE);
		    // Line break
		    $this->Ln(4);
		}
	}
	$pdf = new PDF();
	$region = $_GET['region'];
	$header = array('S/N', 'First Name', 'Last Name', 'Branch_office', 'No. Absenses', 'No. Presents');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',12);
	$pdf->Image('../../img/bird.gif', 10, 0, 30);
	$pdf->Ln(30);
	$pdf->ChapterTitle("                                            REPORT ON LAST MONTH ATTENDANCE");
	$pdf->Ln();
	$sql = "SELECT * FROM security_officer_table WHERE base_region='$region'";
	$result = $conn->query($sql);
	foreach($header as $col)
		$pdf->Cell(30, 6, $col, 1);
	$pdf->Ln();	
	$count2=1;
	while($row=$result->fetch_array(MYSQLI_ASSOC))
	{
		$count = 0;
		$count1 = 0;
		
		$id1=$row['sec_off_id'];
		$sql1 = "SELECT * FROM attendance_table WHERE sec_off_id=$id1";
		$result1=$conn->query($sql1);
		
		$pdf->Cell(30, 6, $count2, 1);
		$pdf->Cell(30, 6, $row['first_name'], 1);
		$pdf->Cell(30, 6, $row['last_name'], 1);
		$pdf->Cell(30, 6, $row['branch_office'], 1);
		while($row1=$result1->fetch_array(MYSQLI_ASSOC))
		{
			$time = time()-$row1['time'];
			if($time <= 2592000)
			{
				if($row1['status'] == 1)
					$count++;
				else
					$count1++;
			}	
		}

		$pdf->Cell(30, 6, $count1, 1);
		$pdf->Cell(30, 6, $count, 1);
		$count2++;
		$pdf->Ln();

	}

	$pdf->Output();
	

?>