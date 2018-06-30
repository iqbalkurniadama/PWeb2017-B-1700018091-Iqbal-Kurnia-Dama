 <html>
<head>
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
$nama_lengkap = @$_POST['nama_lengkap'];
$nomer =@$_POST['nomer'];
$asal = @$_POST['asal'];
$provinsi = @$_POST['provinsi'];
$kota = @$_POST['kota'];
$kp = @$_POST['kp'];
$send = @$_POST['send'];
$cp = @$_POST['cp'];
?>
<table class="tabel-biodata">
<tr>
<td colspan="2"><div style="background: #0704ab";><p align="center"><font size="18" color="white"> Data Pembeliin</font></p></div></td>
</tr>
    <tr>
<td width='30%'><p align="left"><i><b><font size="3">
Nama : <?php echo $nama_lengkap; ?><br>
nomer : <?php echo $nomer; ?><br>
Alamat : <?php echo $asal; ?><br>
provinsi <?php echo $provinsi; ?><br>
kota : <?php echo $kota; ?><br>
kode pos : <?php echo $kp; ?><br>
pengiriman : <?php echo $send; ?><br>
Cara Pembayaran : <?php echo $cp; ?>


<form  name="kembali" action="index.php" method="get" >
<a href="#">
<input type="button" value="Kembali" onclick="history.go(-2);" >
</a>
</form>	
	</font></b></i></p></td>
  <td width='70%' align="center"><img src="img/uad.png" style="border-radius: 50%; height: 200px; width: 200px;" /></td>
  </tr>

<tr>
		<td colspan="2" height="50px"><marquee>&copy; 2018 Program Studi Teknik Informatika, Fakultas Teknologi Industri. - Universitas Ahmad Dahlan -</marquee></td>
	</tr>	
</body>
</html>
