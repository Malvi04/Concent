<?php
//	var_dump($_POST);
$A= $_POST["datefrom"];
$datefrom= "$A 00:00:00";
$B= $_POST["todate"];
$todate= "$B 23:59:59";
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=reportsummary.xls");
// Tambahkan table

?>
            <table border="1">
              <thead>
                <tr>
					<th>Agent</th>&nbsp;
					<th>Processing (Asigned)</th>&nbsp;
					<th>Processing (Planned)</th>&nbsp;
					<th>Pending</th>&nbsp;      
					<th>Solved</th>&nbsp;
					<th>Closed</th>&nbsp;
					<th>Total</th>&nbsp;
					</tr>
					</thead>
					<tbody>
                
              
<?php

	$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	
	
		$Cari="SELECT 
				IFNULL( agent,'TOTAL' ) AS agent,
				COUNT(IF(status = 'Processing (Asigned)', 1, NULL)) AS Asigned,
				COUNT(IF(status = 'Processing (Planned)', 1, NULL)) AS Planned,
				COUNT(IF(status = 'Pending', 1, NULL)) AS Pending,
				COUNT(IF(status = 'Solved', 1, NULL)) AS Solved,
				COUNT(IF(status = 'Closed', 1, NULL)) AS Closed,
				COUNT(agent) AS Total
				FROM tickets_history
				WHERE datecreate BETWEEN '$datefrom' AND '$todate'
				Group BY agent
				WITH ROLLUP";
			
	$Tampil = mysqli_query($Open, $Cari);
			while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$agent = stripslashes ($hasil['agent']);
			$Processing_Asigned = stripslashes ($hasil['Asigned']);
			$Processing_Planned = stripslashes ($hasil['Planned']);
			$Pending = stripslashes ($hasil['Pending']);
			$Solved = stripslashes ($hasil['Solved']);
			$Closed = stripslashes ($hasil['Closed']);
			$Total = stripslashes ($hasil['Total']);
		{
	?>
	
	<tr class="gradeX">
		<td><?=$agent?></td>
		<td><?=$Processing_Asigned?></td>
		<td><?=$Processing_Planned?></td>
		<td><?=$Pending?></td>
		<td><?=$Solved?></td>
		<td><?=$Closed?></td>
		<td><?=$Total?></td>
		
	</tr>
	
	
<?php  
		}
	}
//Tutup koneksi engine MySQL
	mysqli_close($Open);
?>
              </tbody>
            </table>
          
