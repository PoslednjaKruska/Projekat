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
    </head>
    
    <body>
        
        <?php
           include_once("header.php");
        ?>
        
        <br /><br />
        
       <?php
            $i = $string = preg_replace('/\s+/', '', $flag);
            $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/RegistracijaKontroler/Provera/";
        ?>
        
        <center>
            <form name="rezervacija" method="post" <?php echo "action='{$link}'/>"; ?>
                <font id="naslov2" style="font-size:30px"> Detalji registracije</font>
                <br><br><br/>
                
                <div id="l">
                    <div id="logo">
                        <image src="http://localhost:8080/Slike/logoHD.png" width="250" height="285"/>
                    </div>
                </div>
                
                <div id="tabela-rez">
                    <br>
                    <table style="background-color:#e3f2f2" width="50%">
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> *Ime i prezime:<br/><br/></font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <br/><input type="text" name="imePrezime" size="30" required/> <br/><br/></td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> *E-mail adresa:</font> </td>
                            <td width="50%" align="center"> <br/><input type="text" name="email" size="30" required/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> </font> </td>
                        </tr>                       
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <br/>Adresa stanovanja: </font> </td>
                            <td width="50%" align="center"> <br/><br/><input type="text" name="adresa" size="30"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> *Grad: </font> </td>
                            <td width="50%" align="center"> <input name="grad"size="30" required/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"></font> </td>
                        </tr>
                  
                        <tr>
                            <td width="50%" align="center"><br/> </td>
                            <td width="50%" align="center"> <br/><input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> </td>
                        </tr>
                         <tr>
                              <td width="50%" align="center"></td>
                             <td width="50%" align="center"> <font color="#16698b" size="2"><b><br/>*Polja označena zvezdicom su obavezna.</font></b></td>
                        </tr>
                   
                    </table>
                    <br>
                </div>
            </form> 
        </center>
        
        <br><br/><br/><br/>
    
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>
