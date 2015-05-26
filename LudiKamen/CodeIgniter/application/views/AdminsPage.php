<?php ?>

<!DOCTYPE html>

<html>

    <head>
        <title>Ćao, Admine!</title>
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
        include_once("header3.php");
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
                    Dobrodošla, <?php echo $username ?>!<br></b><br><br>
                </font><font size="3" color="#16698b">
                Na sledećim linkovima su dostupne početna stranica i <br>izmene u bazi od tvog poslednjeg logovanja.<br><br>
                <br>   <table align="center" cellpadding="6" style="background-color:#e3f2f2" >
                    <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/Nalog">Moj nalog</font></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/LudiKamen/Pocetna">Početna</font></a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/AdminKontroler/Nalozi">Najskorije izmene naloga</font></a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/AdminKontroler/Usluge">Najskorije izmene usluga</font></a>
                        </td>
                    </tr>
                        <tr>
                        <td align="center"><a id="admin" href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/AdminKontroler/Rezervacije">Najskorije rezervacije</font></a>
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




