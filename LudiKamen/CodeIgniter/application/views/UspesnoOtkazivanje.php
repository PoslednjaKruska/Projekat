<?php
?>

 <!DOCTYPE html>
 
 <!-- Autor: Nevena Milinković -->

<html>
    
    <head>
        <title>Success</title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>
        <?php
            if ($admin == 1)
                include_once("header3.php");
            else
                include_once("header2.php");
        ?>

    <body>
        <br /><br />
<br /><br />        
        <center>
            <div id="tabela-rez" height="100%">
                <div style="margin:30px">
                    <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171" style="float:left"/>
                </div>
                <div style="margin:50px">
                    <font color="#16698b" size="3"> 
                    <b>
                    Uspešno ste otkazali Vašu rezervaciju! <br><br>
                    Možete dalje nastaviti sa pretraživanjem sadržaja. <br><br><br></b>
                    </font>
                    <center>
                        <a href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/LudiKamen/Pocetna"> <image src="http://localhost:8080/Slike/pocetna.jpeg" width="120" height="35"/> </a>
                    </center>
                </div>
            </div>
        </center>
        
        <br>
        <font color="black"><!--<p>Ovde bi mogli linkovi za najnovije ponude...--></font></p>
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>




