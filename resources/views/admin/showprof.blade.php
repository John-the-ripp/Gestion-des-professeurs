<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
      <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="overflow-x:scroll;">
                
                
            <table class="table" >
                <thead>
                  <tr style="background-color:black;">
                  <th scope="col">prof</th>
                    <th scope ="col">email</th>
                    <th scope ="col">telephone</th>
                    <th scope ="col">N°CIN</th>
                    <th scope ="col">N°DRPP</th>
                    <th scope ="col">specialite</th>
                    <th scope ="col">date de recrutement</th>
                    <th scope ="col">dossier Administratif</th>
                    <th scope ="col">dossier Pédagogique</th>
                    <th scope ="col">dossier Scientifique</th>
                    <th scope ="col">status</th>
                    <th scope ="col">supprimer</th>

                  </tr>
                </thead>

                @foreach($data as $prof)
                

                <tr>
                    <td>{{$prof->name}}</td>
                    <td>{{$prof->email}}</td>
                    <td>{{$prof->phone}}</td>
                    <td>{{$prof->N_CIN}}</td>
                    <td>{{$prof->N_DRPP}}</td>
                    <td>{{$prof->specialite}}</td>
                    <td>{{$prof->date_de_recrutement}}</td>
                    <td><a href="{{$prof->dossier_scientifique}}" download>{{$prof->dossier_scientifique}}</a></td>
                    <td><a href="{{$prof->dossier_pedagogique}}" download >{{$prof->dossier_pedagogique}}</a></td>
                    <td><a href="{{$prof->dossier_administratif}}" download>{{$prof->dossier_administratif}}</a></td>
                    <td class="badge badge-outline-warning" >{{$prof->status}}</td>
                    <td><a onclick="return confirm('Etes-vous sur de vouloir supprimer cet élément?')" class="btn btn-danger" href="{{url('deleteprof',$prof->id)}}">Delete</a></td>
                    

                    
                    
                </tr>

                @endforeach
               
                
              </table>
        </div>
                </from>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>