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