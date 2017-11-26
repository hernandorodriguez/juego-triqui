<html>
    <head>

        <title>Juego Triqui BD</title>
  <link rel="stylesheet" href="style.css" type="text/css">
        </head>
    <body>
   <style>
       input{
        height: 20px;
        width: 250px;
        text-align: center;
        border: 2px solid #B03A2E;
    } </style> 

        <h1>JUEGO TRIQUI</h1>
       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
     <img src="b.jpg" alt="inicio" width="950px" height="200px">
        <h2 align="center"> Realiza tu registro. ¡Y empieza a jugar!</h2>
        
             <form action="triqui.html" method="post">  

            <h2>Jugador 1 vs Jugador 2</h1>
            <h3>Nombre Jugador1:
            <input type="text" name="jugador1" placeholder="">
            <h3>Nombre Judador2:
            <input type="text" name="jugador2" placeholder="">
            <br><br>
            <button type="submit" value="Registrar" name="bt_registrar">REGISTRAR</button>          
                    
                 

        </form>

    </body>
</html>

<p>

<?php
    if(isset($_POST["bt_registrar"]))
    {
        $jugador1 = $_POST['jugador1'];
        $jugador2 = $_POST['jugador2'];
        
    }
    
    $enlace = new mysqli('localhost', 'root','',  'juego_triqui');

    if ($enlace->connect_errno)
     {
        printf("Connect failed: %s\n", $enlace->connect_error);
        exit();
     }

    if (isset($_POST["bt_registrar"])) 
    {

        
        $campos = "jugador1, jugador2";
                
        $valores = "'".$_POST['jugador1']."','".$_POST['jugador2']."'";

        if (!$enlace->query( "INSERT INTO jugadores ($campos) values ($valores)" ))
         {
            echo"Errormessage: %s\n", $enlace->error;
         }else 
         {
           
            header("location:index.html");

        
         }
    }
    ?>
    
    
    
</p>