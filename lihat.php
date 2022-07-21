<html>
<head>
    <title>Pesanan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <style>
        body{
            background-image:url(gambar.jpg);
            background-size: 100%;
        }
        .navbar{
            height: 60 px;
            top: 0;
            margin: 0;
            display: flex;
            border-bottom: 3px solid darkblue;
            background-color: aliceblue;
            background-size: cover;
        }
        .logo{
            flex: 1;
            margin-left: 20px;
        }

        .logo a{
            display: flex;
            text-decoration: none;
            color: darkblue;
            width: 140px;
        }

        .logo a:hover{
            text-decoration: underline;
        }

        .logo p{
            font-size: 20px;
        }

        .logoku{
            width: 50px;
            height: 50px;
        }

        .product{
            display: flex;
            color: darkblue;
            font-size: x-large;
            text-decoration: underline;
        }
        .menu{
            flex: 1;
        }

        .menu ul{
            display: flex;
            list-style: none;
            float: right;
        }

        .menu li{
            margin-right: 40px;
        }

        .menu a{
            text-decoration: none;
            color: darkblue;
        }

        .container{
            display:flex;
            height: 60vh; 
        }

        .s{
            flex: 1;
        }

        .d{
            flex: 1;
        }

        .t{
            flex: 1;
        }

        .sjpg{
            margin-left: 40px;
            height: 255px;
            width: 350px;
        }
        .djpg{
            margin-left: 40px ;
            margin-right: 40px;
            height: 255px;
            width: 350px;
        }

        .tjpg{
            margin-right: 40px;
            height: 255px;
            width: 350px;
        }

        .ss{
            margin-left: 40px;
            text-align: center;
            font-size: large;
            text-decoration: underline;
            background-color: darkblue;
            color: lightblue;
            height: fit-content;
            width: 350px;
        }

        .dd{
            margin-left: 40px ;
            margin-right: 40px;
            text-align: center;
            font-size: large;
            text-decoration: underline;
            background-color: darkblue;
            color: lightblue;
            height: fit-content;
            width: 350px;
        }

        .tg{
            margin-right: 40px;
            text-align: center;
            font-size: large;
            text-decoration: underline;
            background-color: darkblue;  
            color: lightblue;
            height: fit-content;
            width: 350px;  
        }
        .p{
            text-align: center; 
        }  
    </style>
</head>

<body>
<div class="header">
        <div class="navbar">
        <div class="logo">
                <a href="">
                    <p>TB. Biru</p>
                    <img src="img/logo.png" alt="" class="logoku">
                </a>
            </div>
            <div class="menu">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" arial-current="page" href="index.html"> Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" arial-current="page" href="product.html"> Produk Kami</a></li>
                    <li class="nav-item"><a class="nav-link active" arial-current="page" href="ordernow.php"> Pesan Sekarang</a></li>
                </ul>
            </div>
        </div>
        <br><br>
        <div class="p">
        <div align="center">
    </div>
    <h1 align="center" style="color: darkblue;"> <u> PEMESANAN </u></h1>
    <?php
      echo "<center>";
      echo "<h1>Table Pemesanan</h1>";
      echo "<a href=ordernow.php>Isi Pesanan</a><br/>";
      echo "<a href=order.txt>Hasil Pesanan</a><br/><br/>";
      $fp = fopen("order.txt", "r");
      echo "<table border=1 width=80% >";

      echo "<tr>
          <th>Tanggal</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nomor</th>
          <th>Barang</th>
          <th>Pembayaran</th>
          <th>Keterangan</th>
      </tr>";

      while ($isi = fgets($fp, 200)) {
          $tanggal = date("Y-m-d");
          $pisah = explode("|", $isi);
          echo "<tr>
          <td>$tanggal</td>
          <td>$pisah[0]</td>
          <td>$pisah[1]</td>
          <td>$pisah[2]</td>
          <td>$pisah[3]</td>
          <td>$pisah[4]</td>
          <td>$pisah[5]</td>
        </tr>";
      }

      echo "</table>";
      echo "</center>";
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <footer style="background-color:aliceblue ;padding: 13.7px;text-align:center;">
    <p>
        Copyright &copy;2022 | Designed by Ajeng Dhiyaa Putri Qonita
    </p></footer>
</body>

</html>
