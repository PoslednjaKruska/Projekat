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
            <?php
                $slike = array();
                for ($i=1; $i<=4; $i++) {
                    $s = "http://localhost:8080/Slike/" . $naziv . $i . ".jpg";
                    $slike[$i] = $s;
                }
            ?>
            
            var br = 1;
            
            function sledecaSlika () {
                promeniSliku (br);
                br++;
                if (br === 5) br = 1;
                setTimeout ("sledecaSlika()", 6000);
            }
            
            function promeniSliku (br) {
                if (br === 1) {
                    document.getElementById('slike').style.backgroundImage="url('http://localhost:8080/Slike/RestoranGajic.jpg')";
                }
                if (br === 2) {
                    document.getElementById("slike").style.backgroundImage="url("+<?php echo $slike[2]?>+")";
                }
                if (br === 3) {
                    document.getElementById("slike").style.backgroundImage="url("+<?php echo $slike[3]?>+")";
                }
                if (br === 4) {
                    document.getElementById("slike").style.backgroundImage="url("+<?php echo $slike[4]?>+")";
                }
            }
            
        </script>
        
    </head>
    
    <body onLoad='sledecaSlika()'>
        
        <?php
           include_once("header.php");
        ?>
        
        <br /><br />
        
        <div id="zajedno">
            
            <div id="slike">
                <div id="dugme1" onMouseOver="style.background='#363636' ;promeniSliku(4)" onMouseOut="style.background='#6F6F6F'"> 
                    <div id="broj"> 4 </div> 
		</div>
		<div id="dugme1" onMouseOver="style.background='#363636' ;promeniSliku(3)" onMouseOut="style.background='#6F6F6F'" > 
                    <div id="broj"> 3 </div> 
		</div>
		<div id="dugme1" onMouseOver="style.background='#363636' ;promeniSliku(2)" onMouseOut="style.background='#6F6F6F'" > 
                    <div id="broj"> 2 </div> 
		</div>
		<div id="dugme1" onMouseOver="style.background='#363636' ;promeniSliku(1)" onMouseOut="style.background='#6F6F6F'" > 
                    <div id="broj"> 1 </div> 
		</div> 	
            </div>

            <div id="pretraga1">
                <font id="naslov2" style="font-size:30px"> Restoran Hotela Majdan </font>
                <br /><br />
                <div id="radnja">
                    <div id="opis1">
                        <br /> <br />
                        Opis restorana
                    </div>
                </div>
            </div>
            
            <div id="cena">
		<font id="naslov2" style="font-size:30px"> Cena po osobi je:  ...  </font>	
            </div>
            
            <center> 
                <button form="forma-filteri" id="rezervisi" type="submit"> 
                    <font style="color:#e3f2f2;"> REZERVISITE </font>
                </button> 
            </center>
            
        </div>
        
        <br><br>
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>





