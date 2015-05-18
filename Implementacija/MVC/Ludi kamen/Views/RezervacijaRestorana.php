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
        
        <center> 
            <form name="rezervacija">
                <font id="naslov2" style="font-size:30px"> Rezervacija: <?=$naziv?> </font>
                <br><br>
                <div id="tabela-rez">
                    <br>
                    <table style="background-color:#e3f2f2" width="50%">
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Ime i prezime </font> </td>
                            <td width="50%" align="center"> <input type="text" name="ime" size="30" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Adresa </font> </td>
                            <td width="50%" align="center"> <input type="text" name="adresa" size="30" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> E-mail </font> </td>
                            <td width="50%" align="center"> <input type="text" name="email" size="30" /> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Datum venčanja </font> </td>
                            <td width="50%" align="center"> <input id="datepicker" size="30"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Broj gostiju </font> </td>
                            <td width="50%" align="center"> <input type="text" name="brgosti" size="30" /> </td>
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
                            <td width="50%" align="center"> <input type="text" name="brkartice" size="30" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Datum isteka </font> </td>
                            <td width="50%" align="center"> <input type="text" name="datumisteka" size="30" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Sigurnosni broj </font> </td>
                            <td width="50%" align="center"> <input type="text" name="sigurnosnibr" size="30" /> </td>
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
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <b> POTVRDI </b> </font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <b> ODUSTANI </b> </font> </td>
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


