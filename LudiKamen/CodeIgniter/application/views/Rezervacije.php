 <!DOCTYPE html>
 
 <!-- Autor: Nevena Milinković -->

<html>
    
    <head>
        <title>Rezervacije</title>
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
              $povratak = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/Nalog";
        ?>

    <body>
        <br /><br />
        
        <div id="pretraga">
            
            <font id="naslov2" style="font-size:30px"> Najskorije rezervacije<br><br> </font>
                     <div id="divAdmin"><table>
                <table id="tabela" align="center">
                    <tr> 
                        <td width="25%" align="left"> <font id="slova"> <b>Username</b></font> </a> </td>
                        <td width="25%" align="left"><font id="slova"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Usluga</b></font> </td>
                        <td width="25%" align="left"><font id="slova"><b>Datum rezervacije</b></font> </td>
                        <td width="25%" align="left"></td>
                    </tr>
                </table></div>
          
            <?php 
            if ($empty == 1) {
                echo "<font id='naslov2'><br><br> Nema rezultata. </font> <br><br>";
            }
            else {
                $i = 0;
            while ($i < $numOfRows)
                { ?>
      
                 <div id="adminRez">
		<br>
		<table id="tabela" align="center">
                    <tr> 
                        <td width="25%" align="left"><font id="slova"> &nbsp;&nbsp; <?php echo $users[$i];?></font> </a> </td>
                        <td width="25%" align="left"><font id="slova"> &nbsp;&nbsp; <?php echo $services[$i]; ?></font> </td>
                        <td width="25%" align="left"><font id="slova"> &nbsp;&nbsp; <?php echo $dates[$i++]; ?> </font> </td>
                        <?php if ($admin == 0 && !($admin==10)) { ?>
                        <td width="25%" align="left"><a href="<?php echo "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/KorisnikKontroler/Otkazivanje/" .$services[$i-1]; ?>"> <image src="http://localhost:8080/Slike/odustani.jpeg" width="100" height="35"/> </a> </td>
                <?php } else { ?> <td width="25%" align="left"><td/> <?php } ?>
                    </tr>
		</table>
		<br>
            </div>
           
            
            <?php } } // else
                 //    $link = 'http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/NalogKorisnika/'.$red->IDKorisnik;
       
            ?>
              <br>
            <br>
               <div id="adminRez2">
		
          	<table id="tabela" align="center">
                    <tr> 
                        <td width="25%" align="left"></td>
                        <td width="25%" align="left"></td>
                        <td width="25%" align="left"></font> </td>
                        <td width="25%" align="left"><a href="<?php echo $povratak; ?>"> <image src="http://localhost:8080/Slike/povratak.jpeg" width="100" height="35"/> </a> 
      </td>
                    </tr>
		</table>
               </div>
            <br>
            <br>
            
            <br>
            
        </div>
        <?php
           include_once("footer.php");
        ?>
       <div id="pretraga">     <div id="linkovi"> </div>
        
    </body>
</html>




