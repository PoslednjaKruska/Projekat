<!DOCTYPE html>

<html>
    
    <head>
        <title> Dodavanje slika</title>
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
        
        <?php
            $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/KorisnikKontroler/DodavanjeSlika";
            $povratak = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/Nalog";
        ?>
        
        <center>
            <form name="unos" method="post" enctype="multipart/form-data" <?php echo "action='{$link}'/>"; ?>
                <font id="naslov2" style="font-size:30px"> Dodavanje slika</font>
                <br><br>
                
                <div id="l">
                    <div id="logo" style="margin-left: 40%">
                        <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171"/><br/><br><br>
                    </div>
                </div>
                
                <div id="tabela-rez">
                    <br><br>
                    <table style="background-color:#e3f2f2" width="50%" >
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"><u> Slika 1</u></font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="file" name="slika1" size="30" value="No file selected."/> </font></td> 
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('slika1'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                           <tr>
                               <td width="50%" align="center"> <font color="#16698b" size="3"> <u>Slika 2</u></font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="file" name="slika2" size="30" value="No file selected."/> </font></td> 
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('slika2'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                       <tr>
                           <td width="50%" align="center"> <font color="#16698b" size="3"><u>Slika 3</u></font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="file" name="slika3" size="30" value="No file selected."/> </font></td> 
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('slika3'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                       <tr>
                           <td width="50%" align="center"> <font color="#16698b" size="3"> <u>Slika 4</u></font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="file" name="slika4" size="30" value="No file selected."/> </font></td> 
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('slika4'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <input name="dugme"      type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="120" height="35"/> </td>
                            <td width="50%" align="right"> <a href="<?php echo $povratak; ?>"> <image src="http://localhost:8080/Slike/odustani.jpeg" width="120" height="35" style="margin-left: 150px"/> </a> </td>
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