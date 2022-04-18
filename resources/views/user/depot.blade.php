<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Deposez votre candidature</h1>

      <form class="main-form" action="{{url('deposit')}}" method="POST">
          @csrf 


        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="nom" class="form-control" placeholder="nom et prenom">
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="N_CIN" class="form-control" placeholder="N_CIN">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="N_DRPP" class="form-control" placeholder="N_DRPP">
          </div>

          
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date_de_recrutement" class="form-control" >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="specialite" id="departement" class="custom-select">
              <option>---specialite----</option>
              <option value="2ITE">2ITE</option>
              <option value="ISIC">ISIC</option>
              <option value="GE">GE</option>
              <option value="GI">GI</option>
              <option value="GC">GC</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="numero_tel" class="form-control" placeholder="Numero tel">
          </div>
          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label for="file" class="label-file" style="cursor: pointer;
    color: #00b1ca;
    font-weight: bold;">dossier pedagogique</label>
            <input id="file" name="dossier_pedagogique" class="input-file" type="file" style="color: #25a5c4;">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label for="file" class="label-file" style="cursor: pointer;
    color: #00b1ca;
    font-weight: bold;">dossier scientifique</label>
            <input id="file" name="dossier_scientifique" class="input-file" type="file" style="color: #25a5c4;">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label for="file" class="label-file" style="cursor: pointer;
    color: #00b1ca;
    font-weight: bold;">dossier administratif</label>
            <input id="file" name="dossier_administratif" class="input-file" type="file" style="color: #25a5c4;">
          </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="color:red;">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

</div>  