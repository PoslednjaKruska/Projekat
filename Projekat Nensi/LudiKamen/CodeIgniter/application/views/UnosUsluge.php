 <!DOCTYPE html>

 <!-- Autori: Maša Reko, Aleksandra Šegrt -->
 
<html>
    
    <head>
        <title> Unos usluge </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
    </head>
    
        <?php
        if ($sesija) {
            if ($admin)
                include_once("header3.php");
            else
                include_once("header2.php");
        } else {
           include_once("header.php");
        }
        ?>

    <body>
       
        <br /><br />
        
        <?php
            $link = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Usluga/ProveraUnosa";
            $povratak = "http://localhost:8080/Projekat/LudiKamen/Codeigniter/index.php/Logovanje/Nalog";
        ?>
        
        <center>
            <form name="unos" method="post" enctype="multipart/form-data" <?php echo "action='{$link}'/>"; ?>
                <font id="naslov2" style="font-size:30px"> Unos usluge </font>
                <br><br>
                
                <div id="l">
                    <div id="logo" style="margin: 3%">
                        <image src="http://localhost:8080/Slike/logoHD.png" width="150" height="171"/>
                    </div>
                </div>
                
                <div id="tabela-rez">
                    <br>
                    <table style="background-color:#e3f2f2" width="50%">
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Naziv usluge </font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="text" name="naziv" size="30" value="<?php echo set_value('naziv'); ?>" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('naziv'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Opis </font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="text" name="opis" size="30" value="<?php echo set_value('opis'); ?>" /> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('opis'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Cena </font> </td>
                            <td width="50%" align="center"> <input type="text" name="cena" size="30" value="<?php echo set_value('cena'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('cena'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Veličina </font> </td>
                            <td width="50%" align="center"> <input type="text" name="velicina" size="30" value="<?php echo set_value('velicina'); ?>"/> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('velicina'); ?> </font> </td>
                        </tr>
                        <tr>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> Slika </font> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="3"> <input type="file" name="slika" size="30" value="No file selected."/> </font></td> 
                        </tr>
                        <tr>
                            <td width="50%" align="center"> </td>
                            <td width="50%" align="center"> <font color="#16698b" size="1"> <?php echo form_error('slika'); ?> </font> </td>
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