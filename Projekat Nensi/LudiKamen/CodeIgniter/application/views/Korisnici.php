 <!DOCTYPE html>
 
 <!-- Autor: Nevena Milinković -->

<html>
    
    <head>
        <title>Aktivnosti korisnika</title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>
        <?php
                include_once("header3.php");
        ?>

    <body>
        <br /><br />
        
        <div id="pretraga">
            
            <font id="naslov2" style="font-size:30px">Najskorije aktivnosti korisnika</font>
            
            <?php 
            if ($empty == 1) {
                echo "<font id='naslov2'><br><br> Nema rezultata. </font> <br><br>";
            }
            else {
            foreach ($query as $red) { 
                $ime = str_replace(' ', '', $red->ImePrezime);
                $link = 'http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/NalogKorisnika/'.$red->Username;
            ?>
            <div id="radnja">
		<br>
		<table id="tabela">
                    <tr> 
                        <td colspan="4"> <?php echo "<a href='{$link}'/>"; ?> <font id="naslov2"> &nbsp;&nbsp; <u> <?php echo $red->ImePrezime; ?> </u> </font> </a> </td>
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




