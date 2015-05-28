 <!DOCTYPE html>

<html>
    
    <head>
        <title> Galerija </title>
        <style>
            <?php include 'CSS/stilovi.css'; ?>
        </style>
        <script>
            <?php include 'JavaScript/meniScript.js'; ?>
        </script>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script src="CSS/js/jquery-1.11.0.min.js"></script>
		<script src="CSS/js/lightbox.min.js"></script>
		<link href="CSS/css1/lightbox.css" rel="stylesheet" />
		<script src="CSS/js/prototype.js" type="text/javascript"></script>
		<script src="CSS/js/scriptaculous.js?load=effects" type="text/javascript"></script>
  
        <script>
            $(document).ready(function() {
                $("#datepicker").datepicker();
            });
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
        <br /><br />
        
       <center>
  	<font id="naslov4" style="font-size:30px"> <br /> Galerija </font>
    <br /><br />
   
        <div id="wrap">
					<table>
						<tr>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/1.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/1.jpg" height="250" width="300"></a></a>  </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/2.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/2.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/3.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/3.jpg" height="250" width="300"></a> </td>
						</tr>
						<tr>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/4.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/4.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/5.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/5.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/6.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/6.jpg" height="250" width="300"></a> </td>
						</tr>
						<tr>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/7.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/7.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/8.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/8.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/9.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/9.jpg" height="250" width="300"></a> </td>
						</tr>
						<tr>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/10.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/10.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/11.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/11.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/12.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/12.jpg" height="250" width="300"></a> </td>
						</tr>
						<tr>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/13.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/13.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/14.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/14.jpg" height="250" width="300"></a> </td>
							<td height="250" width="300"> <a href="http://localhost/Slike/Galerija/15.jpg" rel="lightbox[wrap]"><img src="http://localhost/Slike/Galerija/15.jpg" height="250" width="300"></a> </td>
						</tr>
					</table>
				</div>


	</center>

   <div id="cena">
	<font id="naslov2" style="font-size:23px"> </font>	
   </div>
   </div>
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>