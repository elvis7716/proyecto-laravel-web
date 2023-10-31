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
    <p>Lorem Ipsum es simplemente un texto de relleno de la industria de la impresión y la tipografía. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde el siglo XVI, cuando un impresor desconocido tomó una galería de tipos y los mezcló para hacer un libro de muestras tipográficas. Ha sobrevivido no sólo a cinco siglos, sino también al salto hacia la composición tipográfica electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de hojas de Letraset que contenían pasajes de Lorem Ipsum y, más recientemente, con software de autoedición como Aldus PageMaker, que incluía versiones de Lorem Ipsum.</p>
    <h1>lista Personas</h1>
        
    @foreach( $personas as $persona)
        <p> {{$persona['nombres' ]}} {{$persona['paterno' ]}} {{$persona['materno' ]}} {{$persona['documento' ]}} {{$persona['celular' ]}} {{$persona['foto' ]}}</p> 
        
        


    @endforeach
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Paterno</th>
      <th scope="col">Materno</th>
      <th scope="col">Documento</th>
      <th scope="col">Celular</th>
      <th scope="col">Foto</th>
      <th scope="col" class="text-align">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($personas as $persona)
    
        

    <tr>
      <th scope="row">1</th>
      <td>{{$persona['nombres' ]}}</td>
      <td>{{$persona['paterno' ]}}</td>
      <td>{{$persona['materno' ]}}</td>
      <td>{{$persona['documento' ]}}</td>
      <td>{{$persona['celular' ]}}</td>
      <td><img style ="height: 50px" src="{{$persona['foto' ]}}" alt=""></td>
      <td class="" style="text-align: center;">
      <a href="{{ route('mostrar-persona', $persona['personasID']) }}" type="button" class="btn btn-danger">Detalles</a>
      <a type="button" class="btn btn-success">Editar</a>
      <a type="button" class="btn btn-info">Eliminar</a>
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
        th {
    background-color: #3498db; /* Cambia el color de fondo */
    color: #0e0d0d; /* Cambia el color del texto */
    text-align: center; /* Alinea el texto al centro */
    padding: 10px; /* Añade espacio interno alrededor del contenido */
    border: 1px solid #ce1515; /* Añade bordes */
  }
        
</style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>