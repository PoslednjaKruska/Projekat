 <!DOCTYPE html>

<html>
    
    <head>
        <title> Rezervacija restorana </title>
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
    </head>
    
    <body>
        
        <?php
           include_once("header.php");
        ?>
        
        <br /><br />
        
        <?php
            $i = $string = preg_replace('/\s+/', '', $naziv);
            $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Rezervacija/Provera/" . $i;
        ?>
        
        <center>
            <form name="rezervacija" method="post" <?php echo "action='{$link}'/>"; ?>>
                <font id="naslov2" style="font-size:30px"> Rezervacija: <?=$naziv?> </font>
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
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="text" name="ime" size="30" value="<?php echo set_value('ime'); ?>" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('ime'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Adresa </font> </td>
                            <td width="50%" align="center"> <input type="text" name="adresa" size="30" value="<?php echo set_value('adresa'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('adresa'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> E-mail </font> </td>
                            <td width="50%" align="center"> <input type="text" name="email" size="30" value="<?php echo set_value('email'); ?>"/> </td>
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
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Broj gostiju </font> </td>
                            <td width="50%" align="center"> <input type="text" name="brgosti" size="30" value="<?php echo set_value('brgosti'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('brgosti'); ?> </font> </td>
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
                            <td width="50%" align="center"> <div id="ukupno"> <font color="#16698b" size="5"> <b> 1000€ </b> </font> </div> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> </td>
                            <td width="50%" align="right"> <image src="http://localhost:8080/Slike/odustani.jpeg" width="120" height="35"/> </td>
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


