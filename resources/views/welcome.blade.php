<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <header>
        <h1>halloween</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
</head>
<body>
<style>
        /* Estilos en línea */
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://img.freepik.com/vector-gratis/feliz-tarjeta-espeluznante-halloween-estilo-corte-papel_1017-34199.jpg?w=1380&t=st=1698419461~exp=1698420061~hmac=fb67d93bf09d6947596ba37158b9329dc0ee184c470f916c15ea3edfed3c9975');
        }

        header {
            background-color:black;
            color: #fff;
            padding: 10px;
        }
        header.container{
          padding: 10px 20px;
        }
        a {
    color: #0077b6; /* Cambia el color de los enlaces a azul */
}

/* Estilo para los botones */
.boton {
    background-color: #fca311; /* Cambia el color de fondo de los botones a naranja */
    color: #fff; /* Cambia el color del texto de los botones a blanco */
    padding: 10px 20px; /* Añade relleno alrededor de los botones */
    border: none; /* Quita el borde de los botones */
}

        nav ul {
            list-style: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
            
        }
        footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}


        /* Agrega más estilos aquí */
    </style>
    
<div class = "container">
    <h1>ELVIS</h1>
    <div class="card" style="width: 25rem;">
    <div class = "card" style= color: red >
    <img src="https://previews.123rf.com/images/aprillrain/aprillrain2212/aprillrain221200612/196177803-imagen-de-caricatura-de-un-astronauta-sentado-en-una-luna-ilustraci%C3%B3n-de-alta-calidad.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">brillando en la oscuridad</h5>
    <p class="card-text">En la vida no hay premios ni castigos, sino consecuencias.</p>
    <a href="#" class="btn btn-primary">SIGUENTE</a>
   
</div>
</div>
<button type="button" class="btn btn-outline-primary">Primary</button>
<p class="card-text">En la vida no hay premios ni castigos, sino consecuencias.</p>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
<form class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
    
    <footer>

        <p>Derechos de autor &copy; 2023 Elvis winder ccama</p>
<i class="fa fa-home"></i>
<i class="fa fa-search"></i>
<i class="fa fa-cloud"></i>
<i class="fa fa-trash"></i>
        
    </footer>
    
</body>
</html>
