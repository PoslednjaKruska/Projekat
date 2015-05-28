 <!DOCTYPE html>

<html>
    
    <head>
        <title>Usluge</title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>
    <?php
           if ($admin)
                include_once("header3.php");
            else
                include_once("header2.php");
            ?>

    <body>
        <br /><br />
        
        <div id="pretraga">
            <?php if ($admin==1)
            { ?>
            <font id="naslov2" style="font-size:30px"> Najnovije usluge </font>
            <?php } else { ?>             <font id="naslov2" style="font-size:30px"> Vaše usluge </font> <?php } ?>
            
            <?php 
            if ($empty == 1) {
                echo "<font id='naslov2'><br><br> Nema rezultata. </font> <br><br>";
            }
            else {
             foreach ($query as $row) { 
                $ime = str_replace(' ', '', $row->Naziv);
                $slika = 'http://localhost:8080/Slike/' . $ime . '.jpg';
                if ($admin == 1)
                $link = 'http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/AdminKontroler/brisanjeUsluge/' . $ime;
                else
                $link = 'http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/KorisnikKontroler/brisanjeUsluge/' . $ime;
            ?>
                
            <div id="radnja">
		<br>
		<table id="tabela">
			<tr> 
                            <td rowspan="3" width="30%"><?php echo "<img src='{$slika}' height='170' width='220' id='slika'/>"; ?> </a> </td>
                            <td colspan="4"> <font id="naslov2"> &nbsp;&nbsp; <u> <?php echo $row->Naziv; ?> </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                    &nbsp;&nbsp;&nbsp; <?php echo $row->Opis; ?>
                                </font> 
                            </td>
			</tr>
			<tr>  
                            <td> <font color="red" size="4"> &nbsp;&nbsp; Ocena: <b> <?php echo $row->Ocena; ?> </b> </font> </td>
                            <td> <font color="#62c2e8" size="4"> Cena po osobi: <b> <?php echo $row->Cena; ?> € </b> </font> </td>
                            <td colspan="2"> <?php echo "<a href='{$link}'/>"; ?> <font color="#16698b" size="4"> <image src="http://localhost:8080/Slike/obrisi.jpeg" width="120" height="35"/> </font> </a> </td>
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




