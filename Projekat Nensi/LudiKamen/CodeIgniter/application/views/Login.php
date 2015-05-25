<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <style><?php include 'CSS/stilovi.css' ?></style>
        <style type="text/css">
            html, body {
                overflow: hidden;
            }
        </style>
    </head>
    <?php
    $provera = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/RegistracijaKontroler/provera/";
    ?>

    <body>
        <?php include_once 'header.php'; ?>  <br/> <br/>
        <br/><br/><br/>
        <div style="text-align:center" id="tekstRegistracija">
            <?php if ($flag == 1) { ?>
                <b><i>  Uneto korisničko ime ne postoji.</b> </br></br>
                Molimo Vas da ponovite unos.</i>
        <?php } else if ($flag == 2) { ?>
            <b><i>  Uneta lozinka je pogrešna.</b> </br></br>
            Molimo Vas da ponovite unos.</i>
    <?php } else { ?>
        <b><i>  Ulogujte se kako biste mogli da rezervišete željene ponude i pregledate svoj nalog.</b> </br></br></i>
<?php } ?>
<br/></br></br></br>

<form method="post" action="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/provera">

    <center>
        <div id="tabela-rez" height="100%">
            <div style="margin:30px">
                <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171" style="float:left"/>
            </div>

            <table align="center" cellpadding="15" style="background-color:#e3f2f2" >
                <tr>
                    <td align="right">Korisničko ime: &nbsp;&nbsp;&nbsp;&nbsp;

                    </td>
                    <td><input type="text" name="korime" style="width: 150px;" required></td>
                </tr>
                <tr>
                    <td align="right">Lozinka: &nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td><input type="password" name="lozinka" style="width: 150px;" required>
                    </td>
                </tr>

                <tr>
                    <td align="right" width="50%"></td>
                    <td align="center">  <input type="image" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> </a></td>

            </table>
        </div>
        </div>

        <br><br><br>

        </form>
        </div>


        </br></br></br></br>
        <?php include_once 'footer.php'; ?>  <br/> <br/>
        </body>
        </html>
        //print_r($podaci);

        //echo $podaci;?>
