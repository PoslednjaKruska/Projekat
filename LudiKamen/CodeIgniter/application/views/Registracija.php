<!DOCTYPE html>

<html>
    <head>
        <title>Registracija</title>
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
            <?php if ($flag == 4) {
                ?>  
                <b><i>Korisničko ime mora sadržati barem 6 karaktera.</b> </br></br>
                Molimo Vas da ponovite unos.</i>
        <?php } else if ($flag == 1) {
            ?>  
            <b><i>Username koji ste uneli već postoji u bazi.</b> </br></br>
            Molimo Vas da ponovite unos.</i>
    <?php } else if ($flag == 2) { ?>
        <b><i>  Lozinka mora sadržati barem 6 karaktera.</b> </br></br>
        Molimo Vas da ponovite unos.</i>
<?php } else if ($flag == 3) { ?>
    <b><i>  Unesene lozinke se ne poklapaju.</b> </br></br>
    Molimo Vas da ponovite unos.</i>
<?php } else { ?>
    <b><i>  Dozvolite da Vam pomognemo da isplanirate Vaše savršeno venčanje!</b> </br></br>
    Registracija, kao i korišćenje našeg sajta, su besplatni.</i>
<?php } ?>
    <br/></br></br></br>
<form method="post" action="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/RegistracijaKontroler/provera">
    <table class="logovanje" align="center" cellpadding="5" id="tabelaRegistracija">
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
            <td align="right">Ponovite lozinku: &nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="password" name="lozinkaPonovo" style="width: 150px;" required></td>
        </tr>

        <tr>
            <td align="right">Kategorija:&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td align="center">
                <select name="kateg" style="width: 150px;">
                    <option>Mlada</option>
                    <option>Mladoženja</option>
                    <option>Poslastičarnica</option>
                    <option>Muzika</option>
                    <option>Salon venčanica</option>
                    <option>Izrađivač pozivnica</option>
                    <option>Restoran</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <!-- treba napisati fju za on action za dugme -->
            <td align="center">
                <input type="image" name="dugme" src="http://localhost:8080/Slike/potvrdi.jpeg" width="100" height="25"/> 
            </td>
        </tr>
    </table>
</form>
</div>


</br></br></br></br>
<?php include_once 'footer.php'; ?>  <br/> <br/>
</body>
</html>
//print_r($podaci);

//echo $podaci;?>
