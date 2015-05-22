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
            var br = 1;
            
            function sledecaSlika () {
                promeniSliku (br);
                br++;
                if (br === 5) br = 1;
                setTimeout ("sledecaSlika()", 6000);
            }
            
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
                        document.getElementById("slike").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "http://localhost:8080/Projekat/LudiKamen/index.php/Pregled/GetImage/" + ime + "/" + br, true);
                xmlhttp.send();
            }
        </script>
        
    </head>
    
    <body onLoad='sledecaSlika()'>
        
        <?php
           include_once("header.php");
        ?>
        
        <br /><br />
        
        <div id="zajedno">
            
            <div id="slike" style="border-color:'black';border-style:solid">
                <div id="dugme1" onMouseOver="style.background='#363636'; promeniSliku(1)" onMouseOut="style.background='#6F6F6F'"> 
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
            
            <!--

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
            
            -->
            
        </div>
        
        <br><br>
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>





