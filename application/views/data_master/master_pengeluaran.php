<?php 
header('Content-type : application/octet-stream');
header('Content-Disposition : attachment; filename=master_pengeluaran.xls');
header('Pragma : no-chace');
header('Expires: 0');
 ?>
 <table border="1px" width="75%">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Project</th>
 			<th>Username</th>
 			<th>Setting Anggaran</th>
 			<th>Jumlah Pengeluaran</th>
 			<th>Tanggal</th>
 			<th>Jam</th>
 			<th>Keterangan Pengeluaran</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($master_pengeluaran as $data): ?>
 			<tr>
 				<td><?php echo $data['idPengeluaran']; ?></td>
 				<td><?php echo $data['namaProject']; ?></td>
 				<td><?php echo $data['username']; ?></td>
 				<td><?php echo $data['settingAnggaran']; ?></td>
 				<td><?php echo $data['jumlahPengeluaran']; ?></td>
 				<td><?php echo $data['tanggal']; ?></td>
 				<td><?php echo $data['jam']; ?></td>
 				<td><?php echo $data['namaPengeluaran']; ?></td>
 			</tr>
 		<?php endforeach ?>
 	</tbody>
 </table>