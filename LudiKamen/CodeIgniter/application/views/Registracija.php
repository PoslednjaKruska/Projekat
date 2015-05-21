<!DOCTYPE html>

<html>
    <head>
        <title>Registracija</title>
        <style><?php include 'CSS/stilovi.css' ?></style>
        <style type="text/css">
            html, body {
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <?php include_once 'header.php'; ?>  <br/> <br/>
        <br/><br/><br/>
        <div style="text-align:center" id="tekstRegistracija">

            <b><i>  Dozvolite da Vam pomognemo da isplanirate Vaše savršeno venčanje!</b> </br></br>
            Registracija, kao i korišćenje našeg sajta, su besplatni.<br/></i></br></br></br>
        <table class="logovanje" align="center" cellpadding="5" id="tabelaRegistracija">
            <tr>
                <td align="right">Korisničko ime: &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input type="textarea" style="width: 150px;"></td>
            </tr>
            <tr>
                <td align="right">Lozinka: &nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input type="password" style="width: 150px;"></td>
            </tr>
            <tr>
                <td align="right">Kategorija:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td align="center">
                    <select name="kateg" style="width: 150px;">
                        <option>Mlada</option>
                        <option>Mladoženja</option>
                        <option>Poslastičarnica</option>
                        <option>Muzika</option>
                        <option>Salon venčanica</option>
                        <option>Izrađivač pozivnica</option>
                        <option>Restoran</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <!-- treba napisati fju za on action za dugme -->
                <td align="center"><?php echo "<a href='{$}'/>"; ?>
                    <input name="dugme" type="image" value="" src="http://localhost:8080/Slike/potvrdi.jpeg" width="100" height="25"/> 
                </td>
            </tr>
        </table>
    </div>
    </br></br></br></br>
    <?php include_once 'footer.php'; ?>  <br/> <br/>
</body>
</html>