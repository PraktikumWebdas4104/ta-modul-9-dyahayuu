<?php 
include 'database.php';
$db =new database (); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ 
	$p_arr1 = explode(", ", $d['genre']);
	$p_arr2 = explode(", ", $d['wisata']);
//panggil method edit dari class database
?>
	<table>

	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre film</td>
		<td>
			<input type="checkbox" name="gnr[]" value="Horror" <?php if(in_array('Horror', $p_arr1)){echo "checked=checked";} ?> >Horror <br>
			<input type="checkbox" name="gnr[]" value="Action" <?php if(in_array('Action', $p_arr1)){echo "checked=checked";} ?> >Action <br>
			<input type="checkbox" name="gnr[]" value="Anime" <?php if(in_array('Anime', $p_arr1)){echo "checked=checked";} ?> >Anime  <br>
			<input type="checkbox" name="gnr[]" value="Thriller" <?php if(in_array('Thriller', $p_arr1)){echo "checked=checked";} ?> >Thriller <br>
			<input type="checkbox" name="gnr[]" value="Animasi" <?php if(in_array('Animasi', $p_arr1)){echo "checked=checked";} ?> >Animasi <br>
		</td>
	</tr>
	<tr>
		<td>Wisata tujuan</td>
		<td>
		<input type="checkbox" name="wst[]" value="Bali" <?php if(in_array('Bali', $p_arr2)){echo "checked=checked";} ?> >Bali <br>
		<input type="checkbox" name="wst[]" value="Raja ampat" <?php if(in_array('Raja ampat', $p_arr2)){echo "checked=checked";} ?> >Raja Ampat <br>
		<input type="checkbox" name="wst[]" value="Pulau Derawan" <?php if(in_array('Pulau Derawan', $p_arr2)){echo "checked=checked";} ?> >Pulau Derawan <br>
		<input type="checkbox" name="wst[]" value="Bangka belitung" <?php if(in_array('Bangka belitung', $p_arr2)){echo "checked=checked";} ?> >Bangka Belitung <br>
		<input type="checkbox" name="wst[]" value="Labuan bajo" <?php if(in_array('Labuan bajo', $p_arr2)){echo "checked=checked";} ?> >Labuan Bajo <br>
		</td>
	</tr>

	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
