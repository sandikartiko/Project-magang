<?php 
	include "../koneksi.php";
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {font-family: arial; background-color: #ccc;}
		.rangkaisurat  {width: 1140px; margin: 0 auto; background-color: #fff;  padding: 20px;}
		table {border-bottom: 5px solid #000; padding: 2px;}
		.tengah {text-align: center; line-height: 5px;}

	</style>
</head>
<body>
	<div class="rangkaisurat">
		<table widht ="100%">
			<tr>
				<td><img src="../hh.jpg" width="126px"></td>
				<td class="tengah">
					<h2>PEMERINTAHAN KABUPATEN MALANG KECAMATAN SINGOSARI</h2>
					<br>
					<h1>DESA TUNJUNGTIRTO</h1>
					<br>
					<h4>sekretariat : Jl. Kantor Desa No. 5 Bunut, Tunjungtirto Tlp.405785 </h4>
				</td>
			</tr>
			<br>
		</table>
		<center>
		<h2>DATA LAPORAN SURAT MASUK</h2>
	</center>
		<table border="1" style="width: 90%">
		<tr>
                  <th>No</th>
                  <th>No Berkas</th>
                  <th>Alamat Pengirim</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>File Document</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($kon,"SELECT * FROM suratmasuk");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
        <td><?php echo $no++?></td>
                <td><?php echo $data['No_Berkas'] ?></td>
                <td><?php echo $data['Alamat_Pengirim'] ?></td>
                <td><?php echo $data['Tanggal'] ?></td>
                <td><?php echo $data['Keterangan'] ?></td>
                <td><a href="../TAMPIL PDF/tampilpdf.php?id=<?=$data['id']?>"><?php echo $data['File_Document']?></a>
                </td>
		</tr>
		<?php 
		}
		?>
	</table>
	
	<script>
		window.print();
	</script>
	</div>
 
</body>
</html>