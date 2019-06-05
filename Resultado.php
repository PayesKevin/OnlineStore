
       <!DOCTYPE html>
       <html lang="en">
       <head>
         <meta charset="UTF-8">
         <title>Evaluacion de Edad</title>
          <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
       </head>


       <body>
        
        <div class="container">
            <div class="row">
          <h1>Evaluacion de edad</h1>
        
            
             <?php 
$valor1 = $_GET['nombre']; 
$valor2 = $_GET['edad']; 





if ($valor2> 17){
  echo "<br><h2>Eres Mayor de edad, "  .$valor1 . " </h2>";
}else{
  echo "<br><h2> Eres  menor de edad, "  .$valor1. "</h2>";
}

?> 
<a href="lab1.html" class="btn btn-primary">Volver</a>

       </body>
       </html>