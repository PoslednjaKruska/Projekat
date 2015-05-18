 <!DOCTYPE html>

<html>
    
    <head>
        <title> Pretraga restorana </title>
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
        
        <div id="filteri">
            <br />
            <font id="naslov"> Filteri </font>
            <br /><br />
            <form name="forma-filteri">
                <font id="slova"> Grad/Naziv restorana: </font>
                <br />
                <input type="text" name="grad_hotel" id="tekst"/>
                <br /><br />
                <font id="slova"> Datum: </font>
                <br />
                <input id="datepicker" style="margin-left: 10%; width: 75%"/>
                <br /><br />
                <font id="slova"> Broj gostiju: </font>
                <br />
                <input type="range" name="gosti" min="0" max="500" value="0" onchange="showValue(this.value, 'g')" style="margin-left: 10%; width: 70%"/>
                <span id="g">0</span>
                <br /><br />
                <font id="slova"> Cena po osobi (u €): </font>
                <br />
                <input type="range" name="cena" min="10" max="100" value="0" onchange="showValue(this.value, 'c')" style="margin-left: 10%; width: 70%"/>
                <span id="c">10</span>
                <br /><br />
                <center> 
                    <button form="forma-filteri" id="dugme" type="submit"> 
                        <font style="color:#e3f2f2;"> POTVRDI </font>
                    </button> 
                </center>
            </form>
        </div>
        
        <div id="pretraga">
            
            <font id="naslov2" style="font-size:30px"> Pregled restorana </font>
            <br /><br />
            <div id="radnja">
		<br>
		<table id="tabela">
			<tr> 
                            <td rowspan="3" width="30%"> <a href="#"> <image src="http://localhost:8080/Slike/majdan.jpg"/> </a> </td>
                            <td colspan="4"> <a href="#"> <font id="naslov2"> <u> Hotel Majdan**** Beograd </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                Otkrijte novootvoreni, moderan hotel Majdan koji odiše elegancijom i udobnošću.
                                Prijatan ambijent sa svim udobnostima koje pruža hotel sa četiri zvezdice neće Vas ostaviti ravnodušnim.
                            </font> </td>
			</tr>
			<tr>  
                            <td> <font color="red" size="4"> Ocena: <b> 8.1 </b> </font> </td>
                            <td> <font color="#62c2e8" size="4"> Cena po osobi: <b> 45€ </b> </font> </td>
                            <td colspan="2"> <a href="#"> <font color="#16698b" size="4"> <b> DUGME </b> </font> </a> </td>
			</tr> 
		</table>
		<br>
            </div>
            <div id="radnja">
		<br>
		<table id="tabela">
			<tr> 
                            <td rowspan="3" width="30%"> <a href="#"> <image src="http://localhost:8080/Slike/majdan.jpg"/> </a> </td>
                            <td colspan="4"> <a href="#"> <font id="naslov2"> <u> Hotel Majdan**** Beograd </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                Otkrijte novootvoreni, moderan hotel Majdan koji odiše elegancijom i udobnošću.
                                Prijatan ambijent sa svim udobnostima koje pruža hotel sa četiri zvezdice neće Vas ostaviti ravnodušnim.
                            </font> </td>
			</tr>
			<tr>  
                            <td> <font color="red" size="4"> Ocena: <b> 8.1 </b> </font> </td>
                            <td> <font color="#62c2e8" size="4"> Cena po osobi: <b> 45€ </b> </font> </td>
                            <td colspan="2"> <a href="#"> <font color="#16698b" size="4"> <b> DUGME </b> </font> </a> </td>
			</tr> 
		</table>
		<br>
            </div>
            <div id="radnja">
		<br>
		<table id="tabela">
			<tr> 
                            <td rowspan="3" width="30%"> <a href="#"> <image src="http://localhost:8080/Slike/majdan.jpg"/> </a> </td>
                            <td colspan="4"> <a href="#"> <font id="naslov2"> <u> Hotel Majdan**** Beograd </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                Otkrijte novootvoreni, moderan hotel Majdan koji odiše elegancijom i udobnošću.
                                Prijatan ambijent sa svim udobnostima koje pruža hotel sa četiri zvezdice neće Vas ostaviti ravnodušnim.
                            </font> </td>
			</tr>
			<tr>  
                            <td> <font color="red" size="4"> Ocena: <b> 8.1 </b> </font> </td>
                            <td> <font color="#62c2e8" size="4"> Cena po osobi: <b> 45€ </b> </font> </td>
                            <td colspan="2"> <a href="#"> <font color="#16698b" size="4"> <b> DUGME </b> </font> </a> </td>
			</tr> 
		</table>
		<br>
            </div>
            <div id="radnja">
		<br>
		<table id="tabela">
			<tr> 
                            <td rowspan="3" width="30%"> <a href="#"> <image src="http://localhost:8080/Slike/majdan.jpg"/> </a> </td>
                            <td colspan="4"> <a href="#"> <font id="naslov2"> <u> Hotel Majdan**** Beograd </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                Otkrijte novootvoreni, moderan hotel Majdan koji odiše elegancijom i udobnošću.
                                Prijatan ambijent sa svim udobnostima koje pruža hotel sa četiri zvezdice neće Vas ostaviti ravnodušnim.
                            </font> </td>
			</tr>
			<tr>  
                            <td> <font color="red" size="4"> Ocena: <b> 8.1 </b> </font> </td>
                            <td> <font color="#62c2e8" size="4"> Cena po osobi: <b> 45€ </b> </font> </td>
                            <td colspan="2"> <a href="#"> <font color="#16698b" size="4"> <b> DUGME </b> </font> </a> </td>
			</tr> 
		</table>
		<br>
            </div>
            <div id="radnja" style="border-bottom-color:#16698b;border-bottom-style:solid">
		<br>
		<table id="tabela">
			<tr> 
                            <td rowspan="3" width="30%"> <a href="#"> <image src="http://localhost:8080/Slike/majdan.jpg"/> </a> </td>
                            <td colspan="4"> <a href="#"> <font id="naslov2"> <u> Hotel Majdan**** Beograd </u> </font> </a> </td>
			</tr>
			<tr>
                            <td colspan="4"> 
                                <font color="#16698b" size="3"> 
                                Otkrijte novootvoreni, moderan hotel Majdan koji odiše elegancijom i udobnošću.
                                Prijatan ambijent sa svim udobnostima koje pruža hotel sa četiri zvezdice neće Vas ostaviti ravnodušnim.
                            </font> </td>
			</tr>
			<tr>  
                            <td> <font color="red" size="4"> Ocena: <b> 8.1 </b> </font> </td>
                            <td> <font color="#62c2e8" size="4"> Cena po osobi: <b> 45€ </b> </font> </td>
                            <td colspan="2"> <a href="#"> <font color="#16698b" size="4"> <b> DUGME </b> </font> </a> </td>
			</tr> 
		</table>
		<br>
            </div>
        
            <div id="linkovi">
                <table id="tabela">
                    <tr>
                        <td width="33%" align="center"> <a href="#"> <font color="#16698b" size="4"> Prethodna </font> </a> </td>
                        <td width="33%" align="center"> 
                            <a href="#"> <font color="#16698b" size="4"> 1 </font> </a>
                            <font color="#16698b" size="4"> | </font>
                            <a href="#"> <font color="#16698b" size="4"> 2 </font> </a>
                            <font color="#16698b" size="4"> | </font>
                            <a href="#"> <font color="#16698b" size="4"> 3 </font> </a>
                        </td>
                        <td width="33%" align="center"> <a href="#"> <font color="#16698b" size="4"> Sledeća </font> </a> </td>
                    </tr>
                </table>
            </div>
            <br><br>
            
        </div>
        
        <?php
           include_once("footer.php");
        ?>
        
    </body>
</html>


