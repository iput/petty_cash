<?php
header('Content-type : application/octet-stream');
header('Content-Disposition : attachment; filename=transaksi_user_'.$this->session->userdata('username').'.xls');
header('Pragma : no-cache');
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
<table border : 1px solid #000; width="100%">
   <thead>
   <tr>
       <td colspan="6">Data Pengeluaran user</td>
   </tr>
   <tr>
       <td colspan="6"></td>
   </tr>
        <tr>
            <th>Nama Project</th>
            <th>Anggaran Project</th>
            <th>Keterangan Pengeluaran</th>
            <th>Waktu</th>
            <th>Jumlah Pengeluaran</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($transaksi as $row): ?>
        <tr>
            <td><?php echo $row['namaProject']; ?></td>
            <td><?php echo $row['settingAnggaran']; ?></td>
            <td><?php echo $row['namaPengeluaran']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['jumlahPengeluaran']; ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"><strong>Jumlah Total Pengeluaran</strong></td>
            <?php foreach ($jumlah as $data): ?>
            <td><?php echo $data['SUM(jumlahPengeluaran)']; ?></td>
            <?php endforeach ?>
        </tr>
    </tfoot>
</table>