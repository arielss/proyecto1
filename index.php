
<html>
    <head>
        <title>Entraditas.bo</title>
        <link rel="icon" type="image/png" href="imagenes/tiket.png">
        <link rel="stylesheet" type="text/css" href="1.css">
    </head>
    <body>
       <div id="im"> 
       <div id="header">
         <ul class="nav">
            <li><a href="practica.html">Inicio</a></li>
            <li><a href="iniciarsesion.html">Iniciar Sesion</a></li>  
            <li><a href="">Ciudades</a>
              <ul>
                <li><a href="Cochabamba.html">Cochabamba</a></li>
                <li><a href="LaPaz.html">La Paz</a></li>
                <li><a href="SantaCruz.html">Santa Cruz</a></li>
                <li><a href="Oruro.html">Oruro</a></li>
                <li><a href="Chuquisaca.html">Chuquisaca</a></li>
                <li><a href="Potosi.html">Potosi</a></li>
              </ul>
            </li>
            <li><a href="contacto.html">Contacto</a></li>
         </ul> 
         <H1>Entraditas.bo</H1>  
       </div>
       </div>
       <br><br><br><br><br>
<center>
<?php
	
	require "phpqrcode/qrlib.php";    
	
	
	$dir = 'temp/';
	$filename = $dir.'test.png';
	$tamaño = 10; 
	$level = 'L'; 
	$framSize = 3;
	$contenido = "Compraste la entrada 100.$ci"; 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	
        
	echo '<img src="'.$dir.basename($filename).'" /><hr/>';  
?>
</center>
</body>
</html>
