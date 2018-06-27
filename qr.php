<<!DOCTYPE html>
<hmtl>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <title>Entraditas.bo</title>
        <link rel="icon" type="image/png" href="imagenes/tiket.png">
        <link rel="stylesheet" type="text/css" href="1.css">
    </head>
    <body>
       <div id="im"> 
       <div id="header">
         <ul class="nav">
            <li><a href="practica.html">Inicio</a></li>
            <li><a href="">Servicios</a>
                <ul>
                    <li><a href="">Atencion al Cliente</a></li>
                    <li><a href="">Acerca de</a></li>
                    <li><a href="">Como Comprar</a></li>                        
                    <li><a href="">Formas de Pago</a>
                <ul>
                    <li><a href="">Tigo Money</a></li>
                    <li><a href="">Visa</a></li>    
                </ul>
                    </li>
                </ul>z
            </li>    
            <li><a href="">Equipos</a>
                <ul>
                <li><a href="Cochabamba.html">Cochabamba</a></li>
                <li><a href="LaPaz.html">La Paz</a></li>
                <li><a href="SantaCruz.html">Santa Cruz</a></li>
                <li><a href="Oruro.html">Oruro</a></li>
                <li><a href="Chuquisaca.html">Chuquisaca</a></li>
                <li><a href="Potosi.html">Potosi</a></li>
                </ul>
            </li>
            <li><a href="">Contacto</a></li>
         </ul>
       <br><br><br><br>
       </div>
       <div style="text-align:center"> 
    <h1>Este es su codigo QR de entrada</h1>
<?php 
    require "phpqrcode/qrlib.php";    
    $nombre = $_POST["nombre"];
    $ci = $_POST["ci"]; 
    $dir = 'temp/';
    $filename = $dir.'test.png';
    $tamaño = 10; 
    $level = 'L'; 
    $framSize = 3;
    $contenido = "Compraste la entrada 100.$ci"; 
    QRcode::png($contenido, $filename, $level, $tamaño, $framSize);     
    echo '<img src="'.$dir.basename($filename).'" /><hr/>';  
?>
</div>
</body>
</html>
