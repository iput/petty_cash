<?php
header('Content-type : application/octet-stream');
header('Content-Disposition : attachment; filename=master_pengeluaran.xls');
header('Pragma : no-chace');
header('Expires: 0');
?>
<style type="text/css">
        table{
            width: 75%;
            border: 1px solid #000;
            margin: 10px;
        }
        table tr th{
            font-size: 18px;
            background: #efefef;
            border : none;
            padding:  10px;
        }
        table tr td{
            text-align: center;
            padding: 10px;
        }
    div.paging{
      margin-top: 20px;
      margin-bottom: 20px;
    }
    div.paging a, div.paging strong{
      display: inline-block;
      width: 20px;
      height: 20px;
      text-align: center;
    }
    div.paging strong{
      font-weight: bold;
    }
    </style>
<table border="1px" width="75%">
    <thead>
        <tr>
            <th colspan="8">Data transkrip pengeluaran</th>
        </tr>
        <tr>
            <th colspan="8"></th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Nama Pengguna</th>
            <th>Jumlah Pengeluaran</th>
            <th>Keterangan Pengeluaran</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($master_pengeluaran as $data): ?>
        <?php 
            $id = $data['idPengeluaran'];
            $namauser = $data['username'];
            $kodeProject = $data['idProject'];
            $jumlah = $data['jumlahPengeluaran'];
            $keterangan = $data['namaPengeluaran'];
            $tgl = $data['tanggal'];?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $namauser; ?></td>
            <td><?php echo $jumlah; ?></td>
            <td><?php echo $keterangan; ?></td>
            <td><?php echo $tgl; ?></td>
        </tr>
    <?php endforeach; ?>      
</tbody>
</table>