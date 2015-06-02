 <!DOCTYPE html>
 
 <!-- Autor: Ana Šamu -->

<html>
    
    <head>
        <title> Početna </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
        
        <script>
            var br = 1;
            var slike = ['http://localhost:8080/Slike/LogoPocetna.jpg', 'http://localhost:8080/Slike/Vencanje1.jpg', 'http://localhost:8080/Slike/Vencanje2.jpg', 'http://localhost:8080/Slike/Vencanje3.jpg', 'http://localhost:8080/Slike/Vencanje4.jpg'];
            
            function sledecaSlika () {
		promeniSliku (br);
		br++;
		if (br === 6) br = 1;
		setTimeout ("sledecaSlika()", 6000);
            }
            
            function promeniSliku (br) {
		if (br === 1) {
                    document.getElementById('slike1').style.backgroundImage="url("+slike[0]+")";
                }
		if (br === 2) {
                    document.getElementById("slike1").style.backgroundImage="url("+slike[1]+")";
		}
		if (br === 3) {
                    document.getElementById("slike1").style.backgroundImage="url("+slike[2]+")";
		}
		if (br === 4) {
                    document.getElementById("slike1").style.backgroundImage="url("+slike[3]+")";
		}
                if (br === 5) {
                    document.getElementById("slike1").style.backgroundImage="url("+slike[4]+")";
		}
            }
        </script>
    </head>
    
    <body onLoad="sledecaSlika()">
        
        <?php
        if ($sesija)
        {
            if ($admin == 1)
                include_once("header3.php");
            else
               include_once("header2.php");
        }
        else
            include_once("header.php");
        ?>
        
        <div id="zajedno">
            
            <div id="pretraga2">
                <font id="naslov3" style="font-size:30px"> <center> Naši zadovoljni mladenci </center></font>
                <div id="slike1">
                    <div id="dugme2" onMouseOver="style.background='#363636' ;promeniSliku(5)" onMouseOut="style.background='#6F6F6F'"> 
                            <div id="broj"> 5 </div> 
                    </div>
                    <div id="dugme2" onMouseOver="style.background='#363636' ;promeniSliku(4)" onMouseOut="style.background='#6F6F6F'"> 
                            <div id="broj"> 4 </div> 
                    </div>
                    <div id="dugme2" onMouseOver="style.background='#363636' ;promeniSliku(3)" onMouseOut="style.background='#6F6F6F'" > 
                            <div id="broj"> 3 </div> 
                    </div>
                    <div id="dugme2" onMouseOver="style.background='#363636' ;promeniSliku(2)" onMouseOut="style.background='#6F6F6F'" > 
                            <div id="broj"> 2 </div> 
                    </div>
                    <div id="dugme2" onMouseOver="style.background='#363636' ;promeniSliku(1)" onMouseOut="style.background='#6F6F6F'" > 
                            <div id="broj"> 1 </div> 
                    </div> 
        	</div> 
                <br><br>
            </div>
            
            <div id="pretraga3">
                <font id="naslov3" style="font-size:30px"> Naše najtraženije usluge  </font>
                <br />
                <div id="radnja1">
                    <div id="desno">
                        <div id="maladesno"> TORTE <a href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Torte"> <img id="sldesno" src="http://localhost:8080/Slike/Torta.jpg"> </a> </div>
			<div id="maladesno"> VENČANICE <a href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Vencanice"> <img id="sldesno" src="http://localhost:8080/Slike/Vencanica.jpg"> </a> </div>
			<div id="maladesno"> RESTORANI <a href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Restorani"> <img id="sldesno" src="http://localhost:8080/Slike/Restoran.jpg"> </a> </div>
			<div id="maladesno"> POZIVNICE <a href="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Pozivnice"> <img id="sldesno" src="http://localhost:8080/Slike/Pozivnica.jpg"> </a> </div>
                    </div>
                </div>
                <br><br>
            </div>
            
        </div>
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>



