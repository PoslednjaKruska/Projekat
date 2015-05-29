<!DOCTYPE html>

<!-- Autor: Nevena Milinković -->

<html>

    <head>
        <title> Nalog </title>
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
        if ($admin == 1) {
                include_once("header3.php");
        }
            else
                include_once("header2.php");
        ?>

        <br /><br />

        <?php
        $i = $string = preg_replace('/\s+/', '', $flag);
        $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/ProveraNaloga/";
        $link2 = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/AdminKontroler/Brisanje/";
        ?>

    <center>
        <?php if ($admin == 0 || $flagAdmin == 1) { ?>
        <form name="rezervacija" method="post" <?php echo "action='{$link}'/>"; ?>
        <?php } else ?><form name="rezervacija" method="post" <?php echo "action='{$link2}'/>"; ?>
      
              <div style="text-align:center" id="tekstRegistracija">
                        <?php if ($flag == 4) {
                ?>  
                <b><i>Korisničko ime mora sadržati barem 6 karaktera.</b> </br>
              .</i><br/><br/>
        <?php } else if ($flag == 1) {
            ?>  
            <b><i>Username koji ste uneli već postoji u bazi.</b> </br>
          </i><br/><br/>
    <?php } else if ($flag == 2) { ?>
        <b><i>  Lozinka mora sadržati barem 6 karaktera.</b> </br>
        </i><br/><br/>
<?php } else if ($flag == 3) { ?>
    <b><i>  Unesene lozinke se ne poklapaju.</b> </br>
   </i><br/><br/>
    <?php } else if ($flag == 5) { ?>
    <b><i>  Ime može da sadrži samo karaktere i svaka reč mora početi velikim slovom.</b> </br>
   </i><br/><br/>
     <?php } else if ($flag == 6) { ?>
    <b><i>  Format e-mail adrese nije korektan.</b> </br>
   </i><br/><br/>
     <?php } else if ($flag == 7) { ?>
    <b><i>  Naziv grada nije unesen u odgovarajućem formatu.</b> </br>
   </i><br/><br/>
<?php } else { ?>
              
              <font id="naslov2" style="font-size:30px"> Podešavanja naloga</font>
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
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><input type="text" name="korime" value="<?php echo $username ?>" size="20" required/> <br/><br/></td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"> *Lozinka:<br/></font> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><input type="password" name="lozinka" value="<?php echo $password ?>" size="20" required/> <br/><br/></td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"><br/> *Ponovite lozinku:<br/><br/><br/></font> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><input type="password" name="lozinkaPonovo" value="<?php echo $password ?>" size="20" required/> <br/><br/><br/></td>
                    </tr><?php if ($kategorija > 0) { ?>
                    <tr>
                        <td width="50%" align="left"><font color="#16698b" size="3">*Kategorija:&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
                        <td width="50%" align="center">
                            <select name="kategorija" style="width: 174px; margin-left: -5px;">
                                <option value="1" <?php if ($kategorija==1) { ?> selected="selected" <?php } ?>>Mlada</option>
                                <option value="2" <?php if ($kategorija==2) { ?> selected="selected" <?php } ?>>Mladoženja</option>
                                <option value="3" <?php if ($kategorija==3) { ?> selected="selected" <?php } ?>>Poslastičarnica</option>
                                <option value="4" <?php if ($kategorija==4) { ?> selected="selected" <?php } ?>>Muzika</option>
                                <option value="5" <?php if ($kategorija==5) { ?> selected="selected"; <?php } ?>>Salon venčanica</option>
                                <option value="6" <?php if ($kategorija==6) { ?> selected="selected"; <?php } ?>>Izrađivač pozivnica</option>
                                <option value="7" <?php if ($kategorija==7) { ?> selected="selected"; <?php } ?>>Restoran</option>
                            </select>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"><br/> *Vaše ime:<br/></font> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><br/><input type="text" name="imePrezime" value="<?php echo $ime ?>" size="20" required/> <br/><br/></td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"><br/> *E-mail adresa:</font> </td>
                        <td width="50%" align="center"> <br/><input type="text" name="email" size="20" value="<?php echo $email ?>" required/> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="1"> </font> </td>
                    </tr>                       
                    <tr>
                        <td width="50%" align="left"> <font color="#16698b" size="3"> <br/><br/>Vaša adresa: </font> </td>
                        <td width="50%" align="center"> <br/><br/><input type="text" name="adresa" value="<?php echo $adresa ?>" size="20"/> </td>
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
                        <td width="50%" align="center"> <input name="grad" size="20" value="<?php echo $grad ?>" required/> </td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"> </td>
                        <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                    </tr>

                    <tr>
                        <td width="50%" align="center"><br/> </td>
                        <td width="50%" align="center"> <br/> <?php if ($admin==0 || $flagAdmin==1) { ?><input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/>
                        <?php } else { ?><input name="dugme" type="image" value="" src="http://localhost:8080/Slike/obrisi.jpeg" width="120" height="35"/><?php } ?>
                        </td>
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
