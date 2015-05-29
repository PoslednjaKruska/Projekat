 <!DOCTYPE html>

<html>
    
    <head>
        <title> Rezervacija restorana </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>
    
    <body>
        
        <?php
           include_once("header.php");
        ?>
        
        <br /><br />
        
        <center>
            <div id="tabela-rez" height="100%">
                <div style="margin:30px">
                    <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171" style="float:left"/>
                </div>
                <div style="margin:50px">
                    <font color="#16698b" size="3"> 
                    <b> Čestitamo! </b> <br><br>
                    Uspešno ste obavili rezervaciju! <br><br>
                    Uskoro ćete dobiti potvrdu na svoju e-mail adresu. <br><br><br>
                    </font>
                    <center>
                        <a href="http://localhost:8080/LudiKamen/Codeigniter/index.php/Pocetna"> <image src="http://localhost:8080/Slike/povratak.jpeg" width="120" height="35"/> </a>
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




