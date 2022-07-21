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
    <form name="form1" method="post" action="proses.php">
        <table width="58%" border="0" align="center">
            <tr>
                <td>Nama Pemesan</td>
                <td><input name="nama" type="text" id="nama" /></td>
            </tr>
            <tr>
                <td>Alamat Pengiriman</td>
                <td><input name="alamat" type="text" id="alamat" /></td>
            </tr>
            <tr>
                <td>Nomor Yang Dapat Dihubungi</td>
                <td><input name="nomor" type="text" id="nomor" /></td>
            </tr>
            <tr>
            <td>Nama Barang</td>
                <td>
                    <select name="barang" id="barang">
                        <option>Paving Block</option>
                        <option>Batu Krikil</option>
                        <option>Batako</option>
                        <option>Batu Bata</option>
                        <option>Semen</option>
                        <option>Genteng</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Pembayaran Via</td>
                <td>
                    <input type="radio" name="bukti" value="Mandiri">Mandiri
                    <input type="radio" name="bukti" value="BRI">BRI
                </td>
            </tr>
            <tr>
                <td>Bukti Pembayaran</td>
                <td>
                    <div class="mb-3" >
                        <label for="formFileDisable" class="form-label"></label>
                        <input class="form-control form-control-sm" id="formFilesm" type="file">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan" id="keterangan"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input class="btn btn-primary btn-sm" type="submit" value="Kirim" />
                    <input class="btn btn-primary btn-sm" type="reset"  value="Batal" />
                </td>
            </tr>
        </table>
    </form>
    <div align="center">
        <strong><a href="lihat.php">::Lihat Pesanan:: </a></strong>
    </div>
        </div>
    </div>
    <br><br><br><br>
    <footer style="background-color:aliceblue ;padding: 15px;text-align:center;">
    <p>
        Copyright &copy;2022 | Designed by Ajeng Dhiyaa Putri Qonita
    </p></footer>
</body>

</html>