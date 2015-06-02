 <!DOCTYPE html>
 
 <!-- Autor: Maša Reko -->

<html>
    
    <head>
        <title> Neuspešna rezervacija </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>
        <?php
    if ($sesija) {
            if ($admin)
                include_once("header3.php");
            else
                include_once("header2.php");
        } else {
            include_once('header.php');
        }
        ?>

    <body>
      
        <br /><br />
        
        <center>
            <div id="tabela-rez" height="100%">
                <div style="margin:30px">
                    <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171" style="float:left"/>
                </div>
                <div style="margin:50px">
                    <font color="#16698b" size="3"> 
                    <b> Rezervacija je neuspešna! </b> <br><br>
                    Tražena usluga nije dostupna za odabrani datum. <br><br>
                    </font>
                    <center>
                        <a href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/LudiKamen/Pocetna"> <image src="http://localhost:8080/Slike/povratak.jpeg" width="120" height="35"/> </a>
                    </center>
                </div>
            </div>
        </center>
        
        <br>
    
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>






