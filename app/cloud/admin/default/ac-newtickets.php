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
$user       = $_SESSION['user'];
$custname   = $_POST['custname'];
$company   = $_POST['company'];
$address    = $_POST['address'];
$custemail  = $_POST['custemail'];
$custphone1 = $_POST['custphone1'];
$custphone2 = $_POST['custphone2'];
//$type       = $_POST['type'];
$category   = $_POST['category'];
$status     = $_POST['status'];
$reqsource  = $_POST['reqsource'];
//$assignto   = $_POST['assignto'];
$date_to    = $_POST['date_to'];
$time_to    = $_POST['time_to'];
$subject    = $_POST['subject'];
$description= $_POST['description'];
$priority   = $_POST['priority'];
$file_attachments = $_FILES['attachment']['tmp_name'];
$name_attachments = $_FILES['attachment']['name'];
//$date = date("d-m-Y", strtotime($ptpdate));



$querya1="SELECT division FROM ticketscategory where category = '$category'";
$hasila1=mysqli_query($Open, $querya1);
$div= $hasila1->fetch_object()->division;

$querya2="SELECT copyemail FROM ticketscategory where category = '$category'";
$hasila2=mysqli_query($Open, $querya2);
$copyemail= $hasila2->fetch_object()->copyemail;

$querya3="SELECT email FROM ticketscategory where category = '$category'";
$hasila3=mysqli_query($Open, $querya3);
$email= $hasila3->fetch_object()->email;

$querya4="SELECT personInCharge FROM ticketscategory where category = '$category'";
$hasila4=mysqli_query($Open, $querya4);
$personInCharge= $hasila4->fetch_object()->personInCharge;

$querya5="SELECT phone FROM ticketscategory where category = '$category'";
$hasila5=mysqli_query($Open, $querya5);
$phone= $hasila5->fetch_object()->phone;

$querya6="SELECT gmemail FROM ticketscategory where category = '$category'";
$hasila6=mysqli_query($Open, $querya6);
$gmemail= $hasila6->fetch_object()->gmemail;


//Mengambil id dari data post
//$query1="select id_data from list_data where item_name = '$item'";
//$hasil1=mysqli_query($Open, $query1);
//$id_data= $hasil1->fetch_object()->id_data;

//single query SQL untuk insert data
//$query="INSERT INTO activity_log SET input_date='$date',item_name='$item',qty='$qty',id_data='$id_data',sender='$sender_name',origin='$origin',dest='$dest',driver='$user',message='$message',phone_sender='$sender_phone',email_sender='$sender_email',id_status='Progress',label_color='warning'";
//$hasil=mysqli_query($Open, $query);


//Multi Query
 $query2="INSERT INTO tickets SET agent='$user',subject='$subject',name='$custname',address='$address',company='$company',email='$custemail',phone1='$custphone1',phone2='$custphone2',type='$type',category='$category',status='$status',reqsource='$reqsource',assignto='$div',assignto2='$personInCharge',description='$description',datetoresolved='$date_to',timetoresolved='$time_to',datecreate='$date',dateupdate='',dateclosed='',labelstatus='warning',labelcategory='$priority',attempt_to='1';
 INSERT INTO tickets_history 
 (id_tickets,agent,subject,name,address,company,email,phone1,phone2,type,category,status,reqsource,assignto,assignto2,description,datetoresolved,timetoresolved,datecreate,dateupdate,dateclosed,labelstatus,labelcategory) SELECT 
 id,agent,subject,name,address,company,email,phone1,phone2,type,category,status,reqsource,assignto,assignto2,description,datetoresolved,timetoresolved,datecreate,dateupdate,dateclosed,labelstatus,labelcategory FROM tickets WHERE agent = '$user' ORDER BY id DESC LIMIT 1;
 INSERT IGNORE customers SET customerName='$company',contactFirstName='$custname',addressLine1='$address',email='$custemail',phone1='$custphone1',phone2='$custphone2',dateCreate='$date',dateUpdate=''";
 $hasil2=mysqli_multi_query($Open, $query2);
 
mysqli_close($Open);

$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		


$Cari                 ="select * FROM tickets WHERE agent = '$user' ORDER BY id DESC LIMIT 1";
	$Tampil           = mysqli_query($Open, $Cari);
		while ( $hasil= mysqli_fetch_array ($Tampil)) {
			$id       = stripslashes ($hasil['id']);
		{
		}
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
$mail->AddAddress("$email","$div"); //tujuan email
$mail->AddCC("$copyemail"); //CC
$mail->AddCC("$gmemail"); //CC
$mail->addAttachment($file_attachments, $name_attachments); // Attachments
$mail->MsgHTML("<u><b>This e-mail was sent by system 'CONTACT CENTER PESONNA OPTIMA JASA'.</b></u><br>
<br>
We have a new ticket created by $user.<br>
<br> 
ID Ticket: $id<br> 
Ticket input at: $date<br>
Customer Name: $custname<br>
Company: $company<br>
Address: $address<br>
Email: $custemail<br>
Phone: $custphone1<br>
<br>
Assign to: $personInCharge / $div<br>
Status: <b>Open Ticket / $status</b><br>
Category: $category<br>
Subject: $subject<br>
Description: $description.<br>
<br>
<br>
Do not reply to this automated message.<br>
Call 021-39509999 if you need more information.");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";



// mengalihkan ke halaman *.php
if(!$hasil2){
echo "<script>alert('Input Fail!');history.go(-1);</script>";
} else{
$m = urlencode("You have successfully input ticket ID #$id");
header("Location: dashboard.php?m=".$m);
}	



?>