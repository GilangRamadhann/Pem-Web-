<?php
	$ekstensi_check	= array('png','jpg', 'jpeg');
    $nama    = $_FILES['fileToUpload']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['fileToUpload']['size'];
	$file_tmp = $_FILES['fileToUpload']['tmp_name'];	    
	if(in_array($ekstensi, $ekstensi_check) === true){
        move_uploaded_file ($_FILES['fileToUpload']['tmp_name'], "image/".$nama);?>
        <!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body style="background-color: #7FFFD4">
			<center>
				<h3>Biodata Diri Mahasiswa</h3>
			<img src="image/<?=$nama;?>" height="160px" width="130px">
			</center>
			<ul>
				<li>Nama<span style="margin-left: 80px">: <?=$_POST['nama'];?></span></li>
				<li>Jenis Kelamin<span style="margin-left: 26px">: <?=$_POST['jk'];?></span></li>
				<li>Fakultas<span style="margin-left: 63px">: <?=$_POST['Fak'];?></span></li>
			</ul>
		</body>
		</html>
    <?php }else{
		echo 'Ekstensi tidak sesuai, akan redirect dalam 5 detik';
		header('Refresh: 5;URL=Form.html');
	}	
?>
<br>
<a href="Type.php">Kembali</a>