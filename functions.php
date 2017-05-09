<?php

require "connect_db.php";

$id = $_GET['q'];
$kode = substr($id, 0, 2);
$i = substr($id, 2);


if ($kode == 'A') {$kategori = 'Anjing';}
if ($kode == 'B') {$kategori = 'Burung';}
if ($kode == 'H') {$kategori = 'Hamster';}
if ($kode == 'I') {$kategori = 'Ikan';}
if ($kode == 'KL') {$kategori = 'Kelinci';}
if ($kode == 'KC') {$kategori = 'Kucing';}
if ($kode == 'P') {$kategori = 'Makanan';}
if ($kode == 'R') {$kategori = 'Reptil';}
if ($kode == 'S') {$kategori = 'Suplemen';}
	
	
$sql= "select hewan.id_hewan, hewan.warna,hewan.harga,hewan.foto, jenishewan.jenis, jenishewan.ras
       from hewan INNER join jenishewan on hewan.id_jenis = jenishewan.id_jenis
       where hewan.id_hewan=$i && hewan.id_nota is null && jenishewan.jenis = '$kategori'";
$result = mysqli_query($mysql,$sql);			
while($row=$result->fetch_assoc())
{
	$nama= $row['jenis'].' '.$row['ras'].' '.$row['warna'];
	?>
	<table>
		
					
			<tr><br>
				<td width="2%"><div class='product-id' style='display:none;'>$i</div></td>
				<td width="10%"><div class='product' id='nama' value='$nama'><?= $row['jenis']?>&nbsp;<?= $row['ras']?>&nbsp;<?= $row['warna']?></div></td>
				<td width="10%"><input type='number' value='1' id='quantity' class='form-control cart-quantity m-b-10px cart-quantity-dropdown' min='1' /></td>
				<td width="10%"><input type="hidden" id="hrg" value="<?= $row['harga']?>">@ Rp. <?= $row['harga']?></td>
				<td width="10%"><button id='save' class='w3-btn w3-khaki w3-card-4' value="<?= $i?>" type="submit" onclick="addModal(this.value,document.getElementById('quantity').value,document.getElementById('hrg').value,document.getElementById('nama').value)">Add To Cart</button></td>
			</tr>
		
	</table>
	
  	<?php
}

?>
