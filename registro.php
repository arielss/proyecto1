<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="conexion1";
  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
      die("Connection failed:".$conn->connect_error);
  }
  
  $pass = $_POST["pass"];
  $rpass = $_POST["rpass"];
                 
        if($pass!=$rpass){
            echo"Por favor revise su contraseña<a href='compra.html'>Volver</a>";
        }else{        
            $stmt=$conn->prepare("INSERT INTO usuario(nombre,apellido,ci,numero,NombreUsuario,pass) VALUES(?,?,?,?,?,?)");
            $stmt->bind_param("ssiiss",$nombre,$apellido,$ci,$numero,$NombreUsuario,$pass);
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $ci = $_POST["ci"];
            $numero = $_POST["numero"];
            $NombreUsuario = $_POST["NombreUsuario"];
            $pass = $_POST["pass"];
            $pass=md5($pass);
            
             $stmt->execute();
    
       require "login.php";
        $stmt->close();
        $conn->close();
        }

?>