<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Pro Prof - gestion des professeurs</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> kartbouni18@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('home')}}"><span class="text-primary">Pro</span>-Prof</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            
            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color:greenyellow;" href="{{url('mescandidatures')}}">mes candidatures</a>
            </li>

            <x-app-layout>
  
            </x-app-layout>


            @else 

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}"> Register</a>
            </li>

            @endauth

            @endif


          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


    
  <div align="center" style="padding:70px;">
      <table>
          <tr style="background-color:black;">
              <th style="padding:10px;font-size: 20px; color:white;">nom et prenom</th>
              <th style="padding:10px;font-size: 20px; color:white;">email</th>
              <th style="padding:10px;font-size: 20px; color:white;">telephone</th>
              <th style="padding:10px;font-size: 20px; color:white;">N°CIN</th>
              <th style="padding:10px;font-size: 20px; color:white;">N°DRPP</th>
              <th style="padding:10px;font-size: 20px; color:white;">specialite</th>
              <th style="padding:10px;font-size: 20px; color:white;">dossier pédagogique</th>
              <th style="padding:10px;font-size: 20px; color:white;">dossier scientifique</th>
              <th style="padding:10px;font-size: 20px; color:white;">dossier administratif</th>
              <th style="padding:10px;font-size: 20px; color:white;">status</th>
              <th style="padding:10px;font-size: 20px; color:white;">Modifier</th>
              <th style="padding:10px;font-size: 20px; color:white;">supprimer</th>
          </tr>

          @foreach($candidature as $candidatures)
              <tr style="background-color:black;" align="center">
              <td style="padding:10px; color:white;">{{$candidatures->name}}</td>
              <td style="padding:10px; color:white;">{{$candidatures->email}}</td>
              <td style="padding:10px; color:white;">{{$candidatures->phone}}</td>
              <td style="padding:10px; color:white;">{{$candidatures->N_CIN}}</td>
              <td style="padding:10px; color:white;">{{$candidatures->N_DRPP}}</td>
              <td style="padding:10px; color:white;">{{$candidatures->specialite}}</td>
              <td style="padding:10px; color:white;"><a href="{{$candidatures->dossier_pedagogique}}" download >{{$candidatures->dossier_pedagogique}}</a></td>
              <td style="padding:10px; color:white;"><a href="{{$candidatures->dossier_scientifique}}" download>{{$candidatures->dossier_scientifique}}</a></td>
              <td style="padding:10px; color:white;"><a href="{{$candidatures->dossier_administratif}}" download>{{$candidatures->dossier_administratif}}</a></td>
              <td style="padding:10px; color:white;">{{$candidatures->status}}</td>
              <td><a class="btn btn-success" href="{{url('modifier',$candidatures->id)}}">Modifier</a></td>
              <td><a class="btn btn-danger" onclick="return confirm('Etes-vous sur de vouloir supprimer cet élément?')" href="{{url('supprimer',$candidatures->id)}}">supprimer</a></td>
          </tr>
        @endforeach
          
      </table>
  </div>
 
    

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>