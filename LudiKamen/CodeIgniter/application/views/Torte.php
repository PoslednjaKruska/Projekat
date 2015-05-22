 <!DOCTYPE html>

<html>
    
    <head>
        <title> Pretraga poslastičarnica </title>
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
        
        <div id="filteri">
            <br />
            <font id="naslov"> Filteri </font>
            <br /><br />
            <form name="forma-filteri" method='POST' action="http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Torte">
                <font id="slova"> Grad: </font>
                <br /><br>
                <input type="text" name="grad" id="tekst"/>
                <br /><br />
                <center> 
                    <input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> 
                </center>
            </form>
        </div>
        
        <div id="pretraga">
            
            <font id="naslov2" style="font-size:30px"> Pregled poslastičarnica </font>
            <br /><br />
            
            <?php 
            if ($brRedova == 0) {
                echo "<font id='naslov2'> Nema rezultata. </font> <br><br>";
            }
            else {
            foreach ($query as $row) { 
                $ime = str_replace(' ', '', $row->ImePrezime);
                $slika = 'http://localhost:8080/Slike/' . $ime . '.jpg';
                $link = 'http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pregled/Torte/' . $ime;
            ?>
            
            <div id="radnja">
		<br>
		<table id="tabela">
			<tr> 
                            <td rowspan="3" width="30%"> <?php echo "<a href='{$link}'/>"; ?> <?php echo "<img src='{$slika}' height='170' width='220' id='slika'/>"; ?> </a> </td>
                            <td colspan="4"> <?php echo "<a href='{$link}'/>"; ?> <font id="naslov2"> &nbsp;&nbsp; <u> <?php echo $row->ImePrezime; ?> </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                    &nbsp;&nbsp;&nbsp; <?php echo $row->Adresa; ?>
                                </font> 
                            </td>
			</tr>
			<tr>  
                            <td> </td>
                            <td> </td>
                            <td colspan="2"> <?php echo "<a href='{$link}'/>"; ?> <font color="#16698b" size="4"> <image src="http://localhost:8080/Slike/detaljnije.jpeg" width="120" height="35"/> </font> </a> </td>
			</tr> 
		</table>
		<br>
            </div>
            
            <?php } }
            ?>
 
            <div id="linkovi"> </div>
            
            <br>
            
        </div>
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>



