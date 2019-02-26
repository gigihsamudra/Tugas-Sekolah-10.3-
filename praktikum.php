<!DOCTYPE html>
<html>
<head>
	<title>Praktikum</title>
	<link rel="stylesheet" type="text/css" href="praktikum.css">
</head>
<body>
  <?php
    if (isset($_POST['hitung'])) {
      $massa = $_POST['massa'];
      $percepatan = $_POST['percepatan'];
      $tinggi = $_POST['tinggi'];
      $kecepatan = $_POST['kecepatan'];
      $operasi = $_POST['operasi'];
      switch ($operasi) {
        case 'EP':
          $hasil = $massa * $percepatan * $tinggi;
        break;
        case 'EK':
          $hasil = 1/2 * $massa * $kecepatan^2;
        break;
      }
    }
  ?>
  <div class="fisika">
  		<h2 class="judul">PENGHITUNGAN</h2>
      <form method="post" action="praktikum.php">
			<input type="text" name="massa" class="bil" autocomplete="off" placeholder="Masukkan Nilai Massa">
			<input type="text" name="percepatan" class="bil" autocomplete="off" placeholder="Masukkan Nilai Percepatan">
      <input type="text" name="tinggi" class="bil" autocomplete="off" placeholder="Masukkan Nilai Tinggi">
      <input type="text" name="kecepatan" class="bil" autocomplete="off" placeholder="Masukkan Nilai Kecepatan">
			<select class="opt" name="operasi">
				<option value="EP">Energi Potensial</option>
				<option value="EK">Energi Kinetik</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
	</div>
</body>
</html>
