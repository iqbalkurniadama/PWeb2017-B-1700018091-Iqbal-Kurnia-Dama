<html>
<head>
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
</div>
<nav>
  <ul class="menu">
  	<h1 align="center" >pembayaran toko alat camping</h1>
  </ul>
</nav>
</head>
<div class="form">
	<h3 align="center" >isi formulir</h3>
	<center> 
	<form action="biodata.php" method="post">
		<label>Nama Lengkap</label><br>
		<input type="text" name="nama_lengkap" required><br><br>
		
		<label>nomer telfon</label><br>
		<input type="text" name="nomer" required><br><br>
		
		<label>Alamat Lengkap </label><br>
		<textarea cols="50" rows="5" name="asal" required></textarea><br><br>
		
		<label>provinsi</label><br>
		<select name="provinsi">
		<option value="#"></option>
			<option value="jawa timur">jawa timur</option>
			<option value="jawa tengah">jawa tengah</option>
			<option value="jawa barat">jawa barat</option>
			<option value="jogja">jogja</option>
		</select><br><br>
		<label>kota </label><br>
		<select name="kota">
		<option value="#"></option>
			<option value="surabaya">surabaya</option>
			<option value="Semarang">Semarang</option>
			<option value="bandung">bandung</option>
			<option value="jogja">jogja</option>
		</select><br><br>
		
		<label>Kode Pos</label><br>
		<input type="text" name="kp" id="in" autofocus required><br><br>
		
		<label>pengiriman </label><br>
		<input type="radio" name="send" value="JNE">JNE
		<input type="radio" name="send" value="tikki">tikki
		<input type="radio" name="send" value="POS">POS<br><br>
		
		<label>Cara Pembayaran </label><br>
		<input type="radio" name="cp" value="ATM">ATM
		<input type="radio" name="cp" value="Indomaret/Alfamart">Indomaret/Alfamart<br><br>	
			
			<input type="submit" name="kirim" onclick="buttonku()" value="Kirim" id="btn">
		<input type="reset" name="batal" value="Batal"><br>
		</div>
		<tr>
		<td colspan="2" bgcolor="lightblue" height="50px"><marquee>&copy; 2018 Program Studi Teknik Informatika, Fakultas Teknologi Industri. - Universitas Ahmad Dahlan -</marquee></td>
	</tr>
	</form>
	</center>
	<script type="text/javascript">
		function buttonku(){
			alert("Apakah data yang diinputkan sudah benar?");
		}
	</script>
</body>
</html>