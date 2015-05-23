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
        
        <?php
            $i = preg_replace('/\s+/', '', $naziv);
            $slika = "http://localhost:8080/Slike/" . $i . "1.jpg";
        ?>
        
        <br /><br />
        
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
                        <font color="#16698b"> 
                            <b> Grad: </b> <?php echo $row->Grad; ?> <br><br>
                            <b> Adresa: </b> <?php echo $row->Adresa; ?> <br><br>
                            <b> E-mail: </b> <?php echo $row->Email; ?> <br><br>
                        </font> 
                    </div>
                </div>
            </div>
            
            <?php
                }
            ?>
            
        </div>
        
        <br><br><br><br>
        
		<table id="tabela-usluga">
			<tr> 
                            <td rowspan="3" width="30%"> <?php echo "<a href='#'/>"; ?> <?php echo "<img src='#' height='170' width='220' id='slika'/>"; ?> </a> </td>
                            <td colspan="4"> <?php echo "<a href='#'/>"; ?> <font id="naslov2"> &nbsp;&nbsp; <u> ime </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                    &nbsp;&nbsp;&nbsp; adresa 
                                </font> 
                            </td>
			</tr>
			<tr>  
                            <td> </td>
                            <td> </td>
                            <td colspan="2"> <?php echo "<a href='#'/>"; ?> <font color="#16698b" size="4"> <image src="http://localhost:8080/Slike/detaljnije.jpeg" width="120" height="35"/> </font> </a> </td>
			</tr> 
		</table>
		<br>
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>





