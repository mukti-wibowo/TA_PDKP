<html>
    <head>
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Pengeluaran Anggaran</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <center><h1><font face="Francois One">Pengeluaran Anggaran</font></h1>
    <p><font face="Century Gothic">Isi pengeluaran keuangan anda</font></p>
    <br><br/>
    <p align="center">Tambah Tabel</p>
    <form method="get" name="frm" action="">
        <td><input align="center" name="jumlah" type="text" size="30" placeholder="jumlah tabel input"/></td>
        <input type="submit" name="btnJumlah" value="Tambah" />
    </form>
    <form method="post" name="frmpost">
    <table width="800" align= "center" border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td width="32" height="22" valign="center">No</td>
    <td  align="center">Pengeluaran</td>
    <td  align="center">Jumlah</td>
    <td  align="center">Satuan</td>
    <td  align="center">Total</td>
    <td  align="center"></td>
    <td  align="center">Tanggal Pengeluaran</td>
    </tr>
    <?php
  if(isset($_GET['jumlah']) && $_GET['jumlah']>0){
  $jumlah_form = $_GET['jumlah'];
  }
  else{
  $jumlah_form = 1;
  }
  for($i=1; $i<=$jumlah_form; $i++){
  ?>
  <tr>
  <td height="23"><?php echo $i; ?></td>
  <td><input name="pengeluaran[]" type="text" size="20" placeholder="Ket pengeluaran" required></td>
  <td><input name="jumlah[]" type="text" size="30" placeholder="jumlah pengeluaran" required></td>
  <td><select name="satuan[]" required>
        <option value="kg">kg</option>
        <option value="buah">buah</option>
        <option value="buah">lembar</option>
        <option value="orang">orang</option>
        </select></td>
  <td><input type="text" name="harga[]" placeholder="total pengeluaran"/></td>
  <td><select name="tanggal[]" required>
        <?php
            for ($j=1; $j<=31 ; $j++) {
        ?>
        <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
        <?php
            }
        ?>
        </select>
    </td>
    <td><select name="bulan[]" required>
        <option value="Januari">Januari</option>
        <?php
            $bulan = array("Januari","Februari","Maret","April","Mei",
            "Juni","Juli","Agusutus","September","Oktober","November","Desember");
            $jml_bln=count($bulan)
        ?>
        <?php
            for ($j=1; $j<=$jml_bln ; $j++) {
                echo "<option value=$bulan[$j]>$bulan[$j]</option>";
            }
        ?>
        </select>
    </td>
    <td><select name="tahun[]" required>
        <?php
            for ($j=2017; $j<=2030 ; $j++) {
        ?>
        <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
        <?php
            }
        ?>
        </select>
    </td>
  </tr>
  <?php
  }
  ?>
  </table>
  <br></br>
    <button type="submit" name='btnOk' value=Submit required>Submit</button>
    <button type="reset">Reset</button>
    </form>
        <form action="menu.php" method="POST">
        <button type="submit">Kembali ke menu</button></br>
        <br></br>
        <table width='800' align='center' cellpadding='2' cellspacing='2' border='2'>
    <tr>
    <th>Ket Pengeluaran</th>
    <th>Jumlah</th>
    <th>Satuan</th>
    <th>Total Pengeluaran</th>
    <th>Tanggal Pengeluaran</th>
    </tr>
<?php

if(isset($_POST['btnOk'])){

$pengeluaran = $_POST['pengeluaran'];
$jumlah = $_POST['jumlah'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];

foreach($pengeluaran as $key => $val){
    echo "<tr>";
    echo "<td align='center'>$pengeluaran[$key]</td>";
    echo "<td align='center'>$jumlah[$key]</td>";
    echo "<td align='center'>$satuan[$key]</td>";
    echo "<td align='center'>Rp $harga[$key]</td>";
    echo "<td align='center'>$tanggal[$key] - $bulan[$key] - $tahun[$key]</td>";
    echo "</tr>";
    }
}
?>
    </body>
</html>