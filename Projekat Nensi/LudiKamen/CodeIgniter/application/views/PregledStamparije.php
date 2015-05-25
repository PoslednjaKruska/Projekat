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
                    xmlhttp = new XMLHttpRequest();
                }
                else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        document.getElementById('slike').style.backgroundImage = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET", "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pregled/GetImage/" + ime + "/" + br, true);
                xmlhttp.send();
            }
        </script>

    </head>
    <?php
    if ($sesija) {
        if ($admin)
            include_once("header3.php");
        else
            include_once("header2.php");
    } else {
        include_once('header.php');
    }
    ?>

    <body>


        <?php
        $i = preg_replace('/\s+/', '', $naziv);
        $slika = "http://localhost:8080/Slike/" . $i . "1.jpg";
        $link1 = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pretraga/Pozivnice";
        ?>

        <br /><br />

        <div id="zajedno">

            <div id="slike" style="background-image: url('<?php echo $slika; ?>')">
                <div id="dugme1" onMouseOver="style.background = '#363636';
                        promeniSliku('<?php echo $i; ?>', 4);" onMouseOut="style.background = '#6F6F6F'"> 
                    <div id="broj"> 4 </div> 
                </div>
                <div id="dugme1" onMouseOver="style.background = '#363636';
                        promeniSliku('<?php echo $i; ?>', 3);" onMouseOut="style.background = '#6F6F6F'" > 
                    <div id="broj"> 3 </div> 
                </div>
                <div id="dugme1" onMouseOver="style.background = '#363636';
                        promeniSliku('<?php echo $i; ?>', 2);" onMouseOut="style.background = '#6F6F6F'" > 
                    <div id="broj"> 2 </div> 
                </div>
                <div id="dugme1" onMouseOver="style.background = '#363636';
                        promeniSliku('<?php echo $i; ?>', 1);" onMouseOut="style.background = '#6F6F6F'" > 
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
                            <a href="<?php echo $link1; ?>"> <image src="http://localhost:8080/Slike/nazad.jpeg" width="120" height="35" /> </a>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>

        <br><br><br><br>

        <?php
        if ($brRedova == 0) {
            echo "<font id='naslov2' style='margin: 5%'> Trenutno nema pozivnica u ponudi. </font> <br><br>";
        } else {
            foreach ($query1 as $row) {
                $i = str_replace(' ', '', $naziv);
                $ime = str_replace(' ', '', $row->Naziv);
                $slika = 'http://localhost:8080/Slike/' . $ime . '.jpg';
                $link = 'http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Rezervacija/Pozivnica/' . $i . '/' . $ime;
                ?>

                <table id="tabela-usluga">
                    <tr> 
                        <td rowspan="3" width="40%" align="center"> <img src='<?php echo $slika; ?>' height='170' width='220' id='slika'/> </td>
                        <td colspan="4" align="left"> <font id="naslov2"> &nbsp;&nbsp; <u> <?php echo $row->Naziv; ?> </u> </font> </td>
            </tr>
            <tr>
                <td colspan="4" align="left"> 
                    <font color="#16698b" size="3"> 
                    &nbsp;&nbsp;&nbsp; <?php echo $row->Opis; ?> <br><br>
                    &nbsp;&nbsp;&nbsp; Veličina: <?php echo $row->Velicina; ?> 
                    </font> 
                </td>
            </tr>
            <tr>  
                <td> <font color="red" size="4"> &nbsp;&nbsp; Ocena: <b> <?php echo $row->Ocena; ?> </b> </font> </td>
                <td> <font color="#62c2e8" size="4"> Cena: <b> <?php echo $row->Cena; ?> € </b> </font> </td>
                <td colspan="2" align="left"> <a href='<?php echo $link; ?>'> <font color="#16698b" size="4"> <image src="http://localhost:8080/Slike/rezervisi.jpg" width="120" height="35"/> </font> </a> </td>
            </tr> 
        </table>

    <?php
    }
}
?>

<br><br>

<?php
include_once("footer.php");
?>

</body>
</html>
