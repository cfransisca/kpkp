<?php

require "connect_db.php";

$id = $_GET['q'];
$kode = substr($id, 0, 2);
$i = substr($id, 2);


if ($kode === 'AJ') {$kategori='Anjing';}
else if ($kode === 'BG') {$kategori = 'Burung';}
else if ($kode === 'HR') {$kategori = 'Hamster';}
else if ($kode === 'IK') {$kategori = 'Ikan';}
else if ($kode === 'KL') {$kategori = 'Kelinci';}
else if ($kode === 'KC') {$kategori = 'Kucing';}
else if ($kode === 'PK') {$kategori = 'Makanan';}
else if ($kode === 'RL') {$kategori = 'Reptil';}
else if ($kode === 'SP') {$kategori = 'Suplemen';}
	
	
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
				<td width="10%"><div class='product' id="nama" value="<?= $nama?>"><?= $nama?></div></td>
				<td width="10%"><input type='number' value='1' id='quantity' class='form-control cart-quantity m-b-10px cart-quantity-dropdown' min='1' /></td>
				<td width="10%"><input type="hidden" id="hrg" value="<?= $row['harga']?>">@ Rp. <?= $row['harga']?></td>
				<td width="10%"><button id='save' class='w3-btn w3-khaki w3-card-4' value="<?= $i?>" type="submit" onclick="addModal(this.value,document.getElementById('quantity').value,document.getElementById('hrg').value,document.getElementById('nama').textContent)">Add To Cart</button></td>
			</tr>
		
	</table>
	
  	<?php
}

?>
