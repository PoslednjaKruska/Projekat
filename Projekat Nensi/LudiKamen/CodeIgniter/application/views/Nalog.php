<?php ?>

<!DOCTYPE html>

<!-- Autor: Nevena Milinković -->

<html>

    <head>
        <title>Vaš meni</title>
        <style>
<?php include 'CSS/stilovi.css'; ?>

        </style>
        <style type="text/css">
            html, body {
                overflow: hidden;
            }
        </style>
        <script>
<?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>

    <body>
<?php
                include_once("header2.php");
        ?>


        <br /><br />
        <br /><br />        
    <center>
        <div id="tabela-rez" height="100%">
            <div style="margin-left:40px; margin-top: 30px">
                <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171" style="float:left; margin-top: 50px"/>
            </div>
            <div style="margin-top:2px; margin-bottom: 30px">
                <font color="#16698b" size="4"> 
                <b>
                    Dobrodošli, <?php echo $username ?>!<br></b><br><br>
                </font><font size="3" color="#16698b">
                Na sledećim linkovima su dostupne informacije o<br>Vašem nalogu i Vaše rezervacije.<br><br>
                <br>   <table align="center" cellpadding="6" style="background-color:#e3f2f2" >
                    <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php//LudiKamen/Pocetna">Početna</font></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/korisnikPodesavanja">Podešavanja naloga</font></a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/KorisnikKontroler/Rezervacije">Vaše rezervacije</font></a>
                        </td>
                    </tr>
                </table>
                </font>
            </div>
        </div>
    </center>

    <br><br><br><br><br>
    <font color="black"><!--<p>Ovde bi mogli linkovi za najnovije ponude...--></font></p>
<?php
include_once("footer.php");
?>

</body>
</html>




