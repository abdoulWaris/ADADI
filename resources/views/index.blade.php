<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.78.1">
    <title>Cover Template · Bootstrap</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="{{('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white " style="background-color: blue; background-image: url('https://th.bing.com/th/id/OIP.wk3bl80eLxQYfa1YUkb9DgHaEK?pid=ImgDet&rs=1'); ">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-left mb-0">ADADI</h3>
      <nav class="nav nav-masthead justify-content-center float-md-right">
        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
        <a class="nav-link" href="{{ route('register') }}">Register</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Aidons les Personnes Deplacés Internes.</h1>
    <p class="lead" >Le burkina Faso est vit depuis maintenant 8ans une crise securitaire la menaçant dans son intégrité entraînant avec elle son lot de conséquences dont les personnes deplacés internes
      qui ont été obligés de quittez les zonnes à risques laissant ainsi leur domiciles et le confort qui va avec,Vous avez au moins un toit sous lequel vous reposer et vous abriter mais eux non.Faites 
      juste l'effort de soutenir ces personnes en ces moments difficiles sur en cette période hivernal.
      <strong>Soyons des BURKIMBILA</strong>
    </p>
    <p class="lead">
      <a href="{{ route('login') }}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Faire un don</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p class="text-dark"> <strong >Le BURKIMDIM c'est aussi la bonté envers son prochain</strong>, by Hamine_Waris.</p>
  </footer>
</div>


    
  </body>
</html>
