 <!DOCTYPE html>

<html>
    
    <head>
        <title> <?php echo $naziv; ?> </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
        
        <script>
            function promeniSliku(ime, br) {
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp=new XMLHttpRequest();
                }
                else {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
               //         alert (xmlhttp.responseText);
                      document.getElementById('slike').style.backgroundImage = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET", "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pregled/GetImage/" + ime + "/" + br, true);
                xmlhttp.send();
            }
        </script>
        
    </head>
    
    <body>
        
        <?php
           include_once("header.php");
        ?>
        
        <br /><br />
        
        <?php
            $i = preg_replace('/\s+/', '', $naziv);
            $slika = "http://localhost:8080/Slike/" . $i . "1.jpg";
            $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Rezervacija/Muzika/" . $i;
            $link1 = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Muzika";
            
            if ($brRedova == 0) {
                echo "<font id='naslov2' style='margin: 5%'> Bend još uvek nije pripremio svoju ponudu. </font> <br><br>";
                 echo "<a style='margin: 5%' href='http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Muzika'> <image src='http://localhost:8080/Slike/nazad.jpeg' width='120' height='35' /> </a>";
            }
            else {
        ?>
        
        <div id="zajedno">
            
            <div id="slike" style="background-image: url('<?php echo $slika; ?>')">
                <div id="dugme1" onMouseOver="style.background='#363636'; promeniSliku('<?php echo $i; ?>', 4);" onMouseOut="style.background='#6F6F6F'"> 
                    <div id="broj"> 4 </div> 
		</div>
		<div id="dugme1" onMouseOver="style.background='#363636' ;promeniSliku('<?php echo $i; ?>', 3);" onMouseOut="style.background='#6F6F6F'" > 
                    <div id="broj"> 3 </div> 
		</div>
		<div id="dugme1" onMouseOver="style.background='#363636' ;promeniSliku('<?php echo $i; ?>', 2);" onMouseOut="style.background='#6F6F6F'" > 
                    <div id="broj"> 2 </div> 
		</div>
		<div id="dugme1" onMouseOver="style.background='#363636' ;promeniSliku('<?php echo $i; ?>', 1);" onMouseOut="style.background='#6F6F6F'" > 
                    <div id="broj"> 1 </div> 
		</div> 	
            </div>
            
            <?php
                foreach ($query as $row) { 
            ?>

            <div id="pretraga1">
                <font id="naslov2" style="font-size:30px"> <?php echo $row->ImePrezime; ?> </font>
                <br />
                <div id="radnja">
                    <div id="opis1">
                        <br /> <br />
                        <font color="red"> 
                            <b> Ocena: </b> <?php echo $row->Ocena; ?> <br><br>
                        </font>
                        <font color="#16698b"> 
                            <b> Grad: </b> <?php echo $row->Grad; ?> <br><br>
                            <b> Adresa: </b> <?php echo $row->Adresa; ?> <br><br>
                            <b> E-mail: </b> <?php echo $row->Email; ?> <br><br>
                            <b> Opis: </b> <?php echo $row->Opis; ?> <br><br>
                        </font> 
                        <font id="naslov2" style="font-size:30px"> Cena po satu je:  <?php echo $row->Cena; ?> €  </font> <br><br>
                        <a href="<?php echo $link; ?>"> <image src="http://localhost:8080/Slike/rezervisi.jpg" width="120" height="35" /> </a>
                         &nbsp; &nbsp; &nbsp;
                        <a href="<?php echo $link1; ?>"> <image src="http://localhost:8080/Slike/nazad.jpeg" width="120" height="35" /> </a>
                    </div>
                </div>
            </div>
            
            <?php
            } }
            ?>
            
        </div>
        
        <br><br><br><br>
        
       
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>





