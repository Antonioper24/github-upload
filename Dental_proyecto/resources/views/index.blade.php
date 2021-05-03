<!DOCTYPE html>
<html>
	<head>
    	<title>Dental Clean&Fresh</title>
    	<meta charset="utf-8">
	<style>
* {
   margin: 0px 0px 0px 0px;
   padding: 0px 0px 0px 0px;

}
body, html {
    padding: 15px 15px 25px 25px;
}
body {
  background: url(../imagen/portadas.png);
}

#encabezado{
        background: url(../imagen/encabezado.png);
        position: relative;
        z-index: 100;
        float: center;
        width: 1428px;
        height: 190px;
}

nav{
        float: right;

}

nav ul{
        margin: 0px;
       padding-top: 150px;
}

nav ul li{
        display: inline-block;
        font-family: 'Muli', sans-serif;
        font-size: 18px;
        line-height: 20px;
        margin-right: 50px;
}

nav ul li a{
        text-decoration: none;
}


#cuerpo1{
        background: url(../imagen/imagenes.png);
        width: 1428px;
        height: 198px;
}

.titulo {
        color: navy;
        font-family: 'Fantasy','critter';
        font-size: 28px;
        text-align: center;
}

p{
        color: black;
        font-family: 'Fantasy','critter';
        font-size: 19px;
        text-align: center;
}


.mostrar {
        font-family: 'Monospace','courier';
        font-size: 19px;
        //text-indent: 100px;
        text-align: center;
        text-decoration: none;
}

blockquote{
  width: 702px;
  height: 350px;
  background: url(../imagen/instalacion.png);
  animation-name: imagenes;
  animation-duration: 8s
}

@keyframes imagenes{
   0%     {background: url(../imagen/instalacion.png);}
   25%    {background: url(../imagen/instalacion1.png);}
   50%    {background: url(../imagen/instalacion2.png);}
   75%     {background: url(../imagen/instalacion1.png);}
   100%    {background: url(../imagen/instalacion2.png);}
}

.cuerpo2 {
        text-align:  center;
        font-family: 'Fantasy','Copperplate';
        font-size: 19px;
        width: 700px;
        padding-left: 720px;
        color: blue;


}


.cuerpo3 {
        text-align: justify;
        font-family: 'Cursive','Lucida Handwriting';
        font-size: 19px;
        width:700px;
        padding-left: 720px;
}
.cuerpo4 {
	width:1430px;
}
.tabla1 img {
    width: 98px;
    height: 100px;
    border-radius: 50%;
}

.sintaxis {
        text-align:  center;
        font-family: 'Fantasy','Copperplate';
        font-size: 19px
        color: blue;
        border: 3px solid red;
	background-color: rgba(255, 99, 71, 0.4);
}

#piefun{
        background: rgba(0, 255, 46, 0.4);
	width: 1435px;
	height: 190px;
}

.pie{
        text-align:  center;
        font-family: 'Fantasy','Copperplate';
        font-size: 29px;
        color: green;

}

.pie1{
	float: right;
        font-family: 'Fantasy','Copperplate';
        font-size: 18px;}
#pie1 img{
	border-radius: 50%;
}
#pie2 img{
	border-radius: 50%;
}
#pie3 img{
	border-radius: 50%;
}

	</style>

	</head>
	<body>
	    <header id="encabezado">
          	<nav>
              	<ul>
                    <li><a href="cliente">Zona Cliente</a></li>
                    <li>
			<a  href="doctores">Zona Doctores</a>
		    </li>
                    <li><a  href="contacto">Contactos</a></li>
               </ul>
            </nav>
        </header>
        </br>
        </br>
        <div id="cuerpo1">
            <h2 class="titulo">Porque sabemos que sonreir es salud</h2>
            </br>
            <p>Por eso todo este a&ntilde;o 30% de descuento en todo los tratamiento.</p>
            </br>
            <p class="mostrar"><b><a href="cita"> Solicita una cita </a></b></p>
            </br>
            <p> Y recuerda cuida de los tuyos utilizando mascarilla, ya que con tu ayuda saldremos adelante.</p>
        </div>
        </br>
        </br>
        <blockquote>
        	<h2 class="cuerpo2">¿Quienes somos?</h2>
        	<p class="cuerpo3">
        		Somos una empresa especializada en servicios dentales integrales que ofrece los tratamientos m&aacute;s innovadores.
			Nos comprometemos con nuestros clientes, para mejorar su salud dental,
        		contamos con un equipo cualificado y comprometido para hacer de sus sonrisas una felicidad. Ofrecemos 
        		tratamientos con calidad garantizada y personalizadas. En Clean&Fresh queremos que confien plenamente en
        		nosotros, ayudandote y acompa&ntilde;andote.
			<br>
			<br>
			En Clean&Fresh trabajamos desde el primero d&iacute;a que contratas uno de nuestros servicios, llevando un control
     			de todos tus tratamientos, adem&aacute;s podras consultar en todo momento tus tratamientos, fechas de citas, entre otras cosas, en 
			nuestra pagina web.
			<br>
			<br>
			Ven y Visitanos en nuestra sucursales Sevilla, Madrid o Barcelona.
        	</p>
        </blockquote>
        </br>
    	</br>
        <table class="cuerpo4">
        	<tr>
        		<td>
        			<table>
        				<tr>
        					<th class="tabla1"><img src="imagen/parte1.png"></th>
        					<th>
        						<table class="sintaxis">
        							<tr> 
        								<th><h2> Endodoncia </h2></th>
        							</tr>
        							<tr>
			        					<td> Utilizamos la m&aacute;s avanzada tecnolog&iacute;a en nuestros tratamientos.<td>
        							</tr>
        							<tr>
       									<td><a href="Endodoncia"> + Informaci&oacute;n </a></td>
       								</tr>
        						</table>
	    					</th>
	    				</tr>
        			</table>
        		</td>
        		<td>
        			<table>
                                        <tr>
                                                <th class="tabla1"><img src="imagen/parte2.png"></th>
               	                                <th>
                                                       <table class="sintaxis">
       								<tr>
        								<th><h2> Ortodoncia </h2></th>
        							</tr>
        							<tr>
        								<td> Consigue una sonrisa fel&iacute;z con nuestro tratamiento.</td>
        							</tr>
        							<tr>
        								<td><a href="Ortodoncia"> + Informaci&oacute;n </a></td>
        							</tr>
        						</table>
						</th>
					</tr>
				</table>
        		</td>
        		<td>
        			<table>
                                        <tr>
                                                <th class="tabla1"><img src="imagen/parte3.png"></th>
                                                <th>
                                                        <table class="sintaxis">
        							<tr>
        								<th><h2> Pr&oacute;tesis Dental </h2></th>
        							</tr>
        							<tr>
        								<td> Utiliza cualquiera de nuestras dos protesis fijas o removibles.</td>
        							</tr>
        							<tr>
        								<td><a href="protesis"> + Informaci&oacute;n </a></td>
       								</tr>
        						</table>
						</th>
					</tr>
				</table>
        		</td>
        	</tr>
        	<tr>
        		<td>
    				<table>
                                        <tr>
                                                <th class="tabla1"><img src="imagen/parte4.png"></th>
                                                <th>
                                                        <table class="sintaxis">
      				  				<tr>
        								<th><h2> Implante </h2></th>
        							</tr>
        							<tr>
        								<td> La mejor tecnolog&iacute;a de vanguardia al servicicio de nuestro clientes.</td>
        							</tr>
        							<tr>
        								<td><a href="Implante"> + Informaci&oacute;n </a></td>
        							</tr>
        						</table>
						</th>
					</tr>
				</table>
        		</td>
        		<td>
        			<table>
                                        <tr>
                                                <th class="tabla1"><img src="imagen/parte5.png"></th>
                                                <th>
                                                        <table class="sintaxis">
        							<tr>
        								<th><h2> Caries </h2></th>
        							</tr>
        							<tr>
        								<td> Ven y visitanos no esperes a que aumente el dolor de tus dientes.</td>
        							</tr>
        							<tr>
        								<td><a href="Caries"> + Informaci&oacute;n </a></td>
        							</tr>
        						</table>
						</th>
					</tr>
				</table>
        		</td>
        		<td>
        			<table>
                                        <tr>
                                                <th class="tabla1"><img src="imagen/parte6.png"></th>
                                                <th>
                                                        <table class="sintaxis">
        							<tr>
        								<th><h2> Est&eacute;tica Dental </h2></th>
        							</tr>
        							<tr>
        								<td> Utilizamos los mejores materiales para que presumas de una sonrisa.</td>
        							</tr>
        							<tr>
        								<td><a href="Estetica"> + Informaci&oacute;n </a></td>
        							</tr>
        						</table>
						</th>
					</tr>
				</table>
        		</td>
        	</tr>
        </table>
        <br>
        <br>
        <div id="piefun">
        	<h4 class="pie">Siguenos en nuestras redes sociales</h4>&nbsp;&nbsp;&nbsp;
        	<a id="pie1" href="https://www.brandandhealth.com/facebook-para-clinicas-dentales/">
			<img src="imagen/Facebook.png">
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a  id="pie2" href="">
			<img src="imagen/twitter.png">
		</a>&nbsp;&nbsp;&nbsp;
		<a id="pie3" href="">
			<img src="imagen/Instagram.png">
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<p class="pie1"><em>
				Nos podras visitar en:
				<br>
				Sevilla:
				<br>
				Av. San Francisco Javier, 20, 41018
				<br>
				Barcelona:
				<br>
				C/ d'Aragó, 406, 408, 08013 Barcelona, B
				<br>
				Madrid:
				<br>
				Plaza del Callao, 2, 28013 Madrid
		</em></p>
        </div>

	</body>
</html>
