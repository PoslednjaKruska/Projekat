 <!DOCTYPE html>
 
 <!-- Autor: Nevena Milinković -->

<html>
    
    <head>
        <title> Uspešan unos </title>
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
        
        <center>
            <div id="tabela-rez" height="100%">
                <div style="margin:30px">
                    <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171" style="float:left"/>
                </div>
                <div style="margin:50px">
                     <?php if ($flag == 1) { ?>
                  <font color="#16698b" size="3"> Slika/slike su uspešno dodate! 
                    <?php } else { ?>   <font color="#16698b" size="3"> Niste dodali nijednu sliku! <?php } ?>
                    <br><br>
                    
                    <br><br>
                    </font>
                    <center>
                        <a href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/KorisnikKontroler/pruzalacSlike"> <image src="http://localhost:8080/Slike/povratak.jpeg" width="120" height="35"/> </a>
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




