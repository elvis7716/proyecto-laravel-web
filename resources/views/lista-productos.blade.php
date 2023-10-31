<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>lista productos</h1>
        
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">categoria</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">fechaderegistro</th>
      <th scope="col">Foto</th>
      
      <th scope="col" class="text-center">Opciones</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $producto)
    
        

    <tr>
      <th scope="row">1</th>
      <td>{{$producto['nombre' ]}}</td>
      <td>{{$producto['categoria' ]}}</td>
      <td>{{$producto['descripcion' ]}}</td>
      <td>{{$producto['precio' ]}}</td>
      <td>{{$producto['stock' ]}}</td>
      <td>{{$producto['fechaderegistro' ]}}</td>
      
      <td><img style ="height: 50px" src="{{$producto['foto' ]}}" alt=""></td>
      <td class="" style="text-align: center;">
      <button type="button" class="btn btn-danger">Detalles</button>
      <button type="button" class="btn btn-success">Editar</button>
      <button type="button" class="btn btn-info">Eliminar</button>
      </td>
     
    </tr>
    @endforeach
    
  
  </tbody>
</table>
    </div>
<style>
     body {
            font-family: Arial, sans-serif;
            background-image: url('https://img.freepik.com/vector-gratis/fondo-curva-azul_53876-113112.jpg?w=1380&t=st=1698425141~exp=1698425741~hmac=92155af6af53621177095884c5739de712677302b77844b3edc8ea209e7654c1');
        }
        h1{

        }
        .table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
tbody, td, tfoot, th, thead, tr {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
td {
    display: table-cell;
    vertical-align: inherit;
}
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}
.redes-sociales a {
    font-size: 24px; /* Cambia el tamaño de los iconos */
    margin-right: 10px; /* Añade margen entre los iconos */
    color: red; /* Cambia el color de los iconos */
}
</style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<footer>

<p>Derechos de autor &copy; 2023 Elvis winder ccama</p>
<div class="redes-sociales">
    <a href="https://www.facebook.com/tucuenta" target="_blank">
        <i class="fab fa-facebook"></i>
    </a>
    <a href="https://www.twitter.com/tucuenta" target="_blank">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="https://www.instagram.com/tucuenta" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>
</div>

</footer>
</html>