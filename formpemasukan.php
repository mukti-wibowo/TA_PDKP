<html>
    <head>
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Pemasukan Anggaran</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <center><h1><font face="Francois One">Pemasukan Anggaran</font></h1>
    <p><font face="Century Gothic">Isi pemasukan keuangan anda</font></p>
    <p align="center">Tambah Tabel</p>
    <form method="get" name="frm" action="">
        <td><input align="center" name="jumlah" type="text" size="30" placeholder="jumlah tabel input"/></td>
        <input type="submit" name="btnJumlah" value="Tambah" />
    </form>
    <form method="post" name="frmpost">
    <table width="800" align= "center" border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td width="32" height="22" valign="center">No</td>
    <td  align="center">Sumber Pemasukan</td>
    <td  align="center">Nominal</td>
    <td ></td>
    <td  align="center">Tanggal Pemasukan</td>
    <td ></td>
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
  <td><input name="pemasukan[]" type="text" size="20" placeholder="Sumber pemasukan" required></td>
  <td><input name="jumlah[]" type="text" size="30" placeholder="Nominal" required></td>
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
    <td align="left"><select name="tahun[]" required>
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
    <th>Sumber Pemasukan</th>
    <th>Nominal Pemasukan</th>
    <th>Tanggal Pemasukan</th>
    </tr>
<?php

if(isset($_POST['btnOk'])){

$pemasukan = $_POST['pemasukan'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];

foreach($pemasukan as $key => $val){

    echo "<tr>";
    echo "<td align='center'>$pemasukan[$key]</td>";
    echo "<td align='center'>Rp $jumlah[$key]</td>";
    echo "<td align='center'>$tanggal[$key] - $bulan[$key] - $tahun[$key]</td>";
    echo "</tr>";
    }
}
?>
    </body>
</html>