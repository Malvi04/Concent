<?php
include "classes/class.phpmailer.php";

session_start();
date_default_timezone_set('Asia/Jakarta');
$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
// menyimpan data kedalam variabel
$date       = date("Y-m-d H:i:s");
$id       	= $_POST['id'];
$user       = $_SESSION['user'];
$status     = $_POST['status'];
$category     = $_POST['category'];
$description= $_POST['description'];
$closeddate= $_POST['closeddate'];
//$date = date("d-m-Y", strtotime($ptpdate));
$Cari                 ="select * from tickets where id = '$id'";
	$Tampil               = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$id			= stripslashes ($hasil['id']);
			$agent		= stripslashes ($hasil['agent']);
			$agent_dedicated	= stripslashes ($hasil['agent_dedicated']);
			$subject	= stripslashes ($hasil['subject']);
			$custname   = stripslashes ($hasil['name']);
			$address    = stripslashes ($hasil['address']);
			$company    = stripslashes ($hasil['company']);
			$custemail  = stripslashes ($hasil['email']);
			$custphone1 = stripslashes ($hasil['phone1']);
			$custphone2 = stripslashes ($hasil['phone2']);
			$type       = stripslashes ($hasil['type']);
			//$category   = stripslashes ($hasil['category']);
			$description1   = stripslashes ($hasil['description']);
			$reqsource  = stripslashes ($hasil['reqsource']);
			$assignto   = stripslashes ($hasil['assignto2']);
			$date_to    = stripslashes ($hasil['timetoresolved']);
			$datecreate = stripslashes ($hasil['datecreate']);
			$labelstatus= stripslashes ($hasil['labelstatus']);
			$attempt_to= stripslashes ($hasil['attempt_to']);
			$labelcategory= stripslashes ($hasil['labelcategory']);
		{
		}
		}

$Cari1           ="select * FROM ticketscategory where category = '$category'";
$Tampil1         = mysqli_query($Open, $Cari1);
		while ( $hasil1= mysqli_fetch_array ($Tampil1)) {
			$phone3       = stripslashes ($hasil1['phone']);
			$email3       = stripslashes ($hasil1['email']);
			$copyemail3       = stripslashes ($hasil1['copyemail']);
			$gmemail3       = stripslashes ($hasil1['gmemail']);
			$div3       		= stripslashes ($hasil1['division']);
			$personInCharge3       = stripslashes ($hasil1['personInCharge']);
		{}}
//Mengambil id dari data post
//$query1="select id_data from list_data where item_name = '$item'";
//$hasil1=mysqli_query($Open, $query1);
//$id_data= $hasil1->fetch_object()->id_data;


//Multi Query
if ($status == "Closed" || $status == "Solved") {
$query1="UPDATE tickets SET status='$status',category='$category',assignto='$div3',assignto2='$personInCharge3',dateupdate='$date',dateclosed='$closeddate',labelstatus='success',labelcategory='success',attempt_to = attempt_to+1 where id = '$id';
INSERT INTO tickets_history SET id_tickets='$id',agent='$user',subject='$subject',name='$custname',address='$address',company='$company',email='$custemail',phone1='$custphone1',phone2='$custphone1',type='$type',category='$category',status='$status',reqsource='$reqsource',assignto='$div3',assignto2='$personInCharge3',description='$description',timetoresolved='$date_to',datecreate='$datecreate',dateupdate='$date',dateclosed='$closeddate',labelstatus='success',labelcategory='success';";
$hasil1=mysqli_multi_query($Open, $query1);
} 
		

if ($status == 'Processing (Asigned)' || $status == 'Processing (Planned)') {
$query2="UPDATE tickets SET status='$status',category='$category',assignto='$div3',assignto2='$personInCharge3',dateupdate='$date',dateclosed='$closeddate',labelstatus='warning',labelcategory='warning',attempt_to = attempt_to+1 where id = '$id';
INSERT INTO tickets_history SET id_tickets='$id',agent='$user',subject='$subject',name='$custname',address='$address',company='$company',email='$custemail',phone1='$custphone1',phone2='$custphone1',type='$type',category='$category',status='$status',reqsource='$reqsource',assignto='$div3',assignto2='$personInCharge3',description='$description',timetoresolved='$date_to',datecreate='$datecreate',dateupdate='$date',dateclosed='$closeddate',labelstatus='warning',labelcategory='warning';";
$hasil2=mysqli_multi_query($Open, $query2);
} 

if ($status == 'Pending'){
$query3="UPDATE tickets SET status='$status',category='$category',assignto='$div3',assignto2='$personInCharge3',dateupdate='$date',dateclosed='$closeddate',labelstatus='danger',labelcategory='danger',attempt_to = attempt_to+1 where id = '$id';
INSERT INTO tickets_history SET id_tickets='$id',agent='$user',subject='$subject',name='$custname',address='$address',company='$company',email='$custemail',phone1='$custphone1',phone2='$custphone1',type='$type',category='$category',status='$status',reqsource='$reqsource',assignto='$div3',assignto2='$personInCharge3',timetoresolved='$date_to',datecreate='$datecreate',dateupdate='$date',dateclosed='$closeddate',labelstatus='danger',labelcategory='danger';";
$hasil3=mysqli_multi_query($Open, $query3);
}

if ($status == 'Open'){
$query4="UPDATE tickets SET status='$status',category='$category',assignto='$div3',assignto2='$personInCharge3',dateupdate='$date',dateclosed='$closeddate',labelstatus='info',labelcategory='info',attempt_to = attempt_to+1 where id = '$id';
INSERT INTO tickets_history SET id_tickets='$id',agent='$user',subject='$subject',name='$custname',address='$address',company='$company',email='$custemail',phone1='$custphone1',phone2='$custphone1',type='$type',category='$category',status='$status',reqsource='$reqsource',assignto='$div3',assignto2='$personInCharge3',description='$description',timetoresolved='$date_to',datecreate='$datecreate',dateupdate='$date',dateclosed='$closeddate',labelstatus='info',labelcategory='info';";
$hasil4=mysqli_multi_query($Open, $query4);
} 


mysqli_close($Open);

$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		
		




$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = "optimajasa.co.id"; //hostname masing-masing provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "info@optimajasa.co.id"; //user email
$mail->Password = "duaribu19"; //password email
$mail->SetFrom("info@optimajasa.co.id","CONTACT CENTER POJ - $user"); //set email pengirim
$mail->Subject = "CONTACT CENTER POJ - $subject"; //subyek email
$mail->AddAddress("$email3","$div3"); //tujuan email
$mail->AddCC("$copyemail3"); //CC
$mail->AddCC("$gmemail3"); //CC
$mail->addAttachment($file_attachments, $name_attachments); // Attachments
$mail->MsgHTML("<u><b>This e-mail was sent by system 'CONTACT CENTER PESONNA OPTIMA JASA'.</b></u><br>
<br>
We have a new ticket updated by $user.<br>
<br> 
ID Ticket: $id<br> 
Ticket input at: $datecreate<br>
Customer Name: $custname<br>
Company: $company<br>
Address: $address<br>
Email: $custemail<br>
Phone: $custphone1<br>
<br>
Ticket update at: $date<br>
Attempt update: $attempt_to<br>
Assign to: $personInCharge3 / $div3<br>
Status: <b>Update Ticket / $status</b><br>
Category: $category<br>
Subject: $subject<br>
Description at open ticket: $description1.<br>
Description update: $description.<br>
<br>
<br>
Do not reply to this automated message.<br>
Call 021-39509999 if you need more information.");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";


// mengalihkan ke halaman *.php
// $m = urlencode("You have successfully update tickets #$id");
// header("Location: dashboard.php?m=".$m);

?>