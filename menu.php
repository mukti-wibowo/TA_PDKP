<html>
    <head>
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <style type="text/css">
            h1.satu {
                text-align: center;
                margin-top: 180px;
                }
            .button {
                background-color: grey;
                border-radius: 5px;
                color: white;
                padding: 6px 15px;
                text-align: center;
                display: inline-block;
                margin: 4px 2px;
                }
            .button1 {
                background-color: orange;
                border-radius: 10px;
                color: white;
                padding: 15px 40px;
                text-align: center;
                display: inline-block;
                margin: 4px 2px;
                }
        </style>
    </head>
    <body>
        <center><h1><font face="Francois One">Halaman Menu</font></h1>
        <p><font face="Century Gothic">Pilih menu laporan keuangan anda : </font></p>
        <form action="formpemasukan.php" method="POST">
        <button type="submit" name='btn1'class="button1">Pemasukan Anggaran</button>
        </form>
        <form action="formpengeluaran.php" method="POST">
        <button type="submit" name='btn2' class="button1">Pengeluaran Anggaran</button>
        </form>
        <form action="index.php" method="POST">
        <button type="submit" class="button">Keluar</button>
        </form>
    </body>
</html>
