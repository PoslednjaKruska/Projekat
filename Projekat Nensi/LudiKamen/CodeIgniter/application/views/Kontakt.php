 <!DOCTYPE html>
 
 <!-- Autor: Aleksandra Šegrt -->

<html>
    
    <head>
        <title> Kontakt </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>
    
    <body>
        
        <?php
        if ($sesija)
        {
            if ($admin)
                include_once("header3.php");
            else
               include_once("header2.php");
        }
        else
            include_once("header.php");
        ?>
        
        <br /><br />
        
        <center>
            <form name="kontakt" method="post">
                <font id="naslov2" style="font-size:30px"> Kontaktirajte nas:  </font>
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
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Ime </font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="text" name="ime" size="30" value="" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1">  </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3">  Prezime </font> </td>
                            <td width="50%" align="center"> <input type="text" name="prezime" size="30" value=""/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1">  </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> E-mail </font> </td>
                            <td width="50%" align="center"> <input type="text" name="email" size="30" value=""/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1">  </font> </td>
                        </tr>
						
						<tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Subject </font> </td>
                            <td width="50%" align="center"> <input type="text" name="subject" size="30" value=""/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1">  </font> </td>
                        </tr>
						
						<tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Poruka </font> </td>
                            <td width="50%" align="center"> <textarea size="30" rows="10" cols="27" value=""></textarea> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1">  </font> </td>
                        </tr>
						
						<!--***<input type="text" name="poruka" size="30" value=""/>-->
												
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> </td>
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




