<!DOCTYPE html>
<html>
<head>
	<title>Penjualan Sepatu</title>
</head>
<pre><font face="times new roman"><body><center><table border="1">
 <tr><th colspan="3">
 Tampil Data Penjualan Sepatu</th></tr>
 <tr><td colspan="3"><hr></td></tr>
<tr>
<th>Nama Pembeli   :</th><th><?= $nama; ?></th>
</tr>
<tr>
<th>No Telepon         :</th><th><?= $telp; ?></th>
</tr>
<tr>
<th>Merk                   :</th><th><?= $merk; ?></th>
</tr>
<tr>
<th>Ukuran               :</th><th><?= $size; ?></th>
</tr>
<tr>
<th>Harga                 :</th><th><?= $harga; ?></th>
</tr>
<tr>
<td colspan="3" align="center">
<a href="<?= base_url('sepatu'); ?>">Kembali</a>
</td>
</tr>
 </table>
 </center>
</body>
</font>
</pre>
</html>