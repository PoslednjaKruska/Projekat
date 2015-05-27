 <!DOCTYPE html>

<html>
    
    <head>
        <title> Rezervacija torte </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
        <script>
            $(document).ready(function() {
                $("#datepicker").datepicker();
            });
        </script>
        
        <script>
        function showPrice(naziv, kolicina) {
            if (kolicina === "") {
                document.getElementById('ukupno').innerHTML = "0 €";
                return;
            }
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp=new XMLHttpRequest();
            }
            else {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                    document.getElementById('ukupno').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Rezervacija/CenaTorta/" + naziv + "/" + kolicina, true);
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
            header("Location: http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/Login"); 
            exit();
        }
        ?>

    <body>
      
        <br /><br />
        
        <?php
            $iP = $string = preg_replace('/\s+/', '', $nazivP);
            $iT = $string = preg_replace('/\s+/', '', $nazivT);
            $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Rezervacija/ProveraTorta/" . $iP . "/" . $iT;
            $povratak = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Pregled/Poslasticarnica/" . $iP;
        ?>
        
        <center>
            <form name="rezervacija" method="post" <?php echo "action='{$link}'/>"; ?>>
                <font id="naslov2" style="font-size:30px"> Rezervacija: <?=$nazivP?> - <?=$nazivT?> </font>
                <br><br>
                
                <div id="l">
                    <div id="logo">
                        <image src="http://localhost:8080/Slike/logoHD.png" width="250" height="285"/>
                    </div>
                </div>
                
                <div id="tabela-rez">
                    <br>
                    <table style="background-color:#e3f2f2" width="50%">
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Ime i prezime </font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="text" name="ime" size="30" value="<?php echo $imePrezime; ?>" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('ime'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Adresa </font> </td>
                            <td width="50%" align="center"> <input type="text" name="adresa" size="30" value="<?php echo $adresa; ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('adresa'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> E-mail </font> </td>
                            <td width="50%" align="center"> <input type="text" name="email" size="30" value="<?php echo $email; ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('email'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Datum venčanja </font> </td>
                            <td width="50%" align="center"> <input name="datum" id="datepicker" size="30" value="<?php echo set_value('datum'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('datum'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Količina </font> </td>
                            <td width="50%" align="center"> <input type="text" name="kolicina" size="30" onkeyup="showPrice('<?php echo $iT; ?>', this.value)" value="<?php echo set_value('kolicina'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('kolicina'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Tip kartice </font> </td>
                            <td width="50%" align="left"> 
                                <select name="kartica">
                                    <option value="visa"> Visa </option>
                                    <option value="master"> MasterCard </option>
                                    <option value="maestro"> Maestro </option>
                                    <option value="american"> American Express </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Broj kartice </font> </td>
                            <td width="50%" align="center"> <input type="text" name="brkartice" size="30" value="<?php echo set_value('brkartice'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('brkartice'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Datum isteka </font> </td>
                            <td width="50%" align="center"> <input type="text" name="datumisteka" size="30" value="<?php echo set_value('datumisteka'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('datumisteka'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Sigurnosni broj </font> </td>
                            <td width="50%" align="center"> <input type="text" name="sigurnosnibr" size="30" value="<?php echo set_value('sigurnosnibr'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('sigurnosnibr'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="5"> UKUPNO: </font> </td>
                            <td width="50%" align="center"> <div id="ukupno"> 0 € </div> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> </td>
                            <td width="50%" align="right"> <a href="<?php echo $povratak; ?>"> <image src="http://localhost:8080/Slike/odustani.jpeg" width="120" height="35"/> </a> </td>
                        </tr>
                    </table>
                    <br>
                </div>
            </form> 
        </center>
        
        <br>
    
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>


