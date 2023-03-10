<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        form{
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
            border-radius:10px;
            margin-top: 20px;
        }
    </style>
  </head>
  <body>
  <?php

class Fundamentos{

    public function cubo($n){
        return $n**3;
    }

    public function ciudad($c){
        if(strtolower($c) == 'madrid' or strtolower($c) == 'sevilla'){
            echo "Bienvenido";
        }else{
            echo "No bienvenido";
        }
    }

    public function numeros($n1,$n2){
        if($n1+1 < $n2){
          foreach (range($n1+1, $n2-1) as $number)
            echo "$number ";
        }else{
          echo "El primer número tiene que ser mayor";
        }
        
    }
}
$respuesta = new Fundamentos();
?>
    <form action="" method="post">
    <h1>Cubo de un número</h1>
  <div class="mb-3">
    <label for="num" class="form-label">Introduzca el número</label>
    <input type="number" step="0.1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num">
  </div>
  <?php
  if(isset($_POST['enviar1'])){
    echo "Su número al cubo es ".$respuesta -> cubo($_POST['num']);
  }
    
  ?>
  <br>
  <br>
  <button type="submit" name="enviar1" class="btn btn-primary">Enviar</button>
    </form>
    <form action="" method="post">
    <h1>Ciudad de Vacaciones</h1>
    <div class="mb-3">
    <label for="ciudad" class="form-label">Introduzca la ciudad</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ciudad">
    </div>
  <?php
  if(isset($_POST['enviar2'])){
    $respuesta -> ciudad($_POST['ciudad']);
  }
    
  ?>
  <br>
  <br> <button type="submit" name="enviar2" class="btn btn-primary">Enviar</button>
    </form>
    <form action="" method="post">
    <h1>Entre números</h1>
  <div class="mb-3">
    <label for="n1" class="form-label">Primer número</label>
    <input type="number" step="0.1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="n1">
  </div>
  <div class="mb-3">
    <label for="n2" class="form-label">Segundo número</label>
    <input type="number" step="0.1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="n2">
  </div>
  <?php
  if(isset($_POST['enviar3'])){
    $respuesta -> numeros($_POST['n1'],$_POST['n2']);
  }
    
  ?>
  <br>
  <br>
  <button type="submit" name="enviar3" class="btn btn-primary">Enviar</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>