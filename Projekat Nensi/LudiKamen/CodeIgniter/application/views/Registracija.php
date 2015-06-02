<!DOCTYPE html>

<!-- Autor: Nevena Milinković -->

<html>

    <head>
        <title> Registracija </title>
        <style>
<?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
<?php include 'JavaScript/meniScript.js'; ?>
        </script>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    </head>

    <body>

        <?php
        include_once("header.php");
        ?>

        <br /><br />

        <?php
        $i = $string = preg_replace('/\s+/', '', $flag);
        $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/RegistracijaKontroler/Provera/";
        ?>

    <center>
        <form name="rezervacija" method="post" <?php echo "action='{$link}'/>"; ?>
              <div style="text-align:center" id="tekstRegistracija">
                        <?php if ($flag == 4) {
                ?>  
                <b><i>Korisničko ime mora sadržati barem 6 karaktera.</b> </br></br>
                Molimo Vas da ponovite unos.</i><br/><br/>
        <?php } else if ($flag == 1) {
            ?>  
            <b><i>Username koji ste uneli već postoji u bazi.</b> </br></br>
            Molimo Vas da ponovite unos.</i><br/><br/>
    <?php } else if ($flag == 2) { ?>
        <b><i>  Lozinka mora sadržati barem 6 karaktera.</b> </br></br>
        Molimo Vas da ponovite unos.</i><br/><br/>
<?php } else if ($flag == 3) { ?>
    <b><i>  Unesene lozinke se ne poklapaju.</b> </br></br>
    Molimo Vas da ponovite unos.</i><br/><br/>
    <?php } else if ($flag == 5) { ?>
    <b><i>  Ime može da sadrži samo karaktere i svaka reč mora početi velikim slovom.</b> </br></br>
    Molimo Vas da ponovite unos.</i><br/><br/>
     <?php } else if ($flag == 6) { ?>
    <b><i>  Format e-mail adrese nije korektan.</b> </br></br>
    Molimo Vas da ponovite unos.</i><br/><br/>
     <?php } else if ($flag == 7) { ?>
    <b><i>  Naziv grada nije unesen u odgovarajućem formatu.</b> </br></br>
    Molimo Vas da ponovite unos.</i><br/><br/>
<?php } else { ?>
              
              <font id="naslov2" style="font-size:30px"> Registracija</font>
            <br><br><br/>
<?php } ?>
            </div>
            <div id="l">
                <div id="logo" style="margin-top: 120px;">
                    <image src="http://localhost:8080/Slike/logoHD.png" width="250" height="285"/>
                </div>
            </div>

            <div id="tabela-rez">
                <br>
                <table style="background-color:#e3f2f2" width="50%">
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"><br/> *Korisničko ime:<br/><br/></font> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><input type="text" name="korime" size="20" required/> <br/><br/></td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"> *Lozinka:<br/></font> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><input type="password" name="lozinka" size="20" required/> <br/><br/></td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"><br/> *Ponovite lozinku:<br/><br/><br/></font> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><input type="password" name="lozinkaPonovo" size="20" required/> <br/><br/><br/></td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"><font color="#16698b" size="3">*Kategorija:&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
                        <td width="50%" align="center">
                            <select name="kategorija" style="width: 174px; margin-left: -5px;">
                                <option value="1">Mlada</option>
                                <option value="2">Mladoženja</option>
                                <option value="3">Poslastičarnica</option>
                                <option value="4">Muzika</option>
                                <option value="5">Salon venčanica</option>
                                <option value="6">Izrađivač pozivnica</option>
                                <option value="7">Restoran</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"><br/> *Vaše ime:<br/></font> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><br/><input type="text" name="imePrezime" size="20" required/> <br/><br/></td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"><br/> *E-mail adresa:</font> </td>
                        <td width="50%" align="center"> <br/><input type="text" name="email" size="20" required/> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="1"> </font> </td>
                    </tr>                       
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"> <br/><br/>Vaša adresa: </font> </td>
                        <td width="50%" align="center"> <br/><br/><input type="text" name="adresa" size="20"/> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                    </tr>
                    <tr>
                        <td colspan="2" height="20"> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"> *Grad: </font> </td>
                        <td width="50%" align="center"> <input name="grad" size="20" required/> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                    </tr>

                    <tr>
                        <td width="50%" align="center"><br/> </td>
                        <td width="50%" align="center"> <br/><input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"></td>
                        <td width="50%" align="center"> <font color="#16698b" size="2"><b><br/>*Polja označena zvezdicom su obavezna.</font></b></td>
                    </tr>

                </table>
                <br>
            </div>
        </form> 
    </center>

    <br><br/><br/>
    <?php
    include_once("footer.php");
    ?>

</body>
</html>
