<!DOCTYPE html> 
<html>
<head>
<link rel="icon" type="image/png" href="logo.png">
<center><title>Login</title><center>
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <style type="text/css">
            .button {
                background-color: grey;
                border-radius: 5px;
                color: white;
                padding: 6px 15px;
                text-align: center;
                display: inline-block;
                margin: 4px 2px;
                }
        </style>
    </head>
    <body>
    <h1><font face="Francois One">Selamat Datang</font></h1>
    <p><font face="Century Gothic">Login untuk memulai laporan keuangan anda</font></p>

     <form action="server.php"  method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <br></br>
        <input type="password" name="password" placeholder="Password"required>
        <br></br>
        <button type="submit" class="button">Login</button>
    </body>
</html>

