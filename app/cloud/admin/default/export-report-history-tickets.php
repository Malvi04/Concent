<?php
//	var_dump($_POST);
	$csid=$_POST['csid'];
	$custname=$_POST['custname'];
	$company=$_POST['company'];
	$A= $_POST["date_from"];
	$datefrom= "$A 00:00:00";
	$B= $_POST["date_to"];
	$todate= "$B 23:59:59";
date_default_timezone_set('Asia/Jakarta');
$date       = date("d-M-Y His");
$filename = "ReportHistory" . $date . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");




?>
Report History <?=$datefrom?> to date <?=$todate?>
            <table border="1">
                                                                <thead class="text-left">
                                                                    <tr>
                                                                        <th>ID</th>
																		<th>Subject</th>
																		<th>Category</th>
																		<th>Name</th>
																		<th>Company</th>
                                                                        <th>Last Commit</th>
																		<th>Opening Date</th>
																		<th>Priority</th>
																		<th>Status</th>
																		<th>Assign To</th>
                                                                        <th>Assigned User</th>
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


	

	$Cari="select * from tickets_history 
	where datecreate between  '$datefrom' AND '$todate' 
	AND agent LIKE '%$csid%'
	AND name LIKE '%$custname%' 
	AND company LIKE '%$company%'
	order by datecreate DESC";							

	
	$Tampil = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$id			= stripslashes ($hasil['id']);
			$agent		= stripslashes ($hasil['agent']);
			$subject	= stripslashes ($hasil['subject']);
			$custname   = stripslashes ($hasil['name']);
			$address    = stripslashes ($hasil['address']);
			$company    = stripslashes ($hasil['company']);
			$custemail  = stripslashes ($hasil['email']);
			$custphone1 = stripslashes ($hasil['phone1']);
			$custphone2 = stripslashes ($hasil['phone2']);
			$category   = stripslashes ($hasil['category']);
			$status     = stripslashes ($hasil['status']);
			$reqsource  = stripslashes ($hasil['reqsource']);
			$assignto   = stripslashes ($hasil['assignto']);
			$date_to    = stripslashes ($hasil['timetoresolved']);
			$datecreate = stripslashes ($hasil['datecreate']);
			$dateupdate = stripslashes ($hasil['dateupdate']);
			$description= stripslashes ($hasil['description']);
			$labelstatus= stripslashes ($hasil['labelstatus']);
			$labelcategory= stripslashes ($hasil['labelcategory']);
		{
	?>
                                                                    <tr onclick="window.location='form-update-tickets.php?id=<?=$id?>';" style="cursor: pointer;">
                                                                        <td><?=$id?></td>
																		<td><?=$subject?></td>
                                                                        <td><?=$category?></td>
																		<td><?=$custname?></td>
																		<td><?=$company?></td>
																		<td><?=$dateupdate?></td>
                                                                        <td><?=$datecreate?></td>
                                                                        <td><label class="label label-<?=$labelcategory?>"><?=$category?></td>
																		<td><label class="label label-<?=$labelstatus?>"><?=$status?></td>
                                                                        <td><?=$assignto?></td>
                                                                        <td><?=$agent?></td>
																		</tr>
																	<?php  
		}
	}
	
	
//Tutup koneksi engine MySQL
	mysqli_close($Open);
?>
    
                                                                </tbody>
                                                            </table>
          
         