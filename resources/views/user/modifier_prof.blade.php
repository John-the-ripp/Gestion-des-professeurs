<!DOCTYPE html>
<html lang="en">
<head>


@if(session()->has('message'))

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
        x 
    </button>
    {{session()->get('message')}}

</div>

@endif
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
        
    </nav>  
    
    <form action="{{url('editprof',$data->id)}}" method="GET" entype="multipart/form-data"> 
        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="nom" class="form-control" placeholder="nom et prenom" value="{{$data->name}}">
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="N_CIN" class="form-control" placeholder="N_CIN" value="{{$data->N_CIN}}">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="N_DRPP" class="form-control" placeholder="N_DRPP" value="{{$data->N_DRPP}}">
          </div>

          
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address.." value="{{$data->email}}">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date_de_recrutement" class="form-control" value="{{$data->date_de_recrutement}}" >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="specialite" id="departement" class="custom-select" value="{{$data->specialite}}">
              <option>---specialite----</option>
              <option value="2ITE">2ITE</option>
              <option value="ISIC">ISIC</option>
              <option value="GE">GE</option>
              <option value="GI">GI</option>
              <option value="GC">GC</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="numero_tel" class="form-control" placeholder="Numero tel" value="{{$data->phone}}">
          </div>
          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label for="file" class="label-file" style="cursor: pointer;
    color: #00b1ca;
    font-weight: bold;">dossier pedagogique</label>
            <input id="file" name="dossier_pedagogique" class="input-file" type="file" style="color: #25a5c4;"  value="{{$data->dossier_pedagogique}}">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label for="file" class="label-file" style="cursor: pointer;
    color: #00b1ca;
    font-weight: bold;">dossier scientifique</label>
            <input id="file" name="dossier_scientifique" class="input-file" type="file" style="color: #25a5c4;" value="{{$data->dossier_scientifique}}">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label for="file" class="label-file" style="cursor: pointer;
    color: #00b1ca;
    font-weight: bold;">dossier administratif</label>
            <input id="file" name="dossier_administratif" class="input-file" type="file" style="color: #25a5c4;" value="{{$data->dossier_administratif}}">
          </div>
          <button type="submit" class="btn btn-primary mt-3 wow zoomIn" >Submit Request</button>
    </form>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>