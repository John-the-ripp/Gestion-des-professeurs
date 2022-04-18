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
            <div class="container">
           
            <table class="table" align="center" >
                <thead>
                  <tr style="background-color:black;">
                    <th scope="col">professeur</th>
                    <th scope ="col">dossier scientifique</th>
                    <th scope ="col">dossier pedagogique</th>
                    <th scope ="col">dossier administratif</th>
                    <th scope="col">status</th>
                    <th scope="col" >Accepter</th>
                    <th scope="col">rejecter</th>
                  </tr>
                </thead>

                @foreach($data as $info)

                <tr  align="center">
                    <td>{{$info->name}}</td>
                    <td><a href="{{$info->dossier_scientifique}}" download >{{$info->dossier_scientifique}}</a></td>
                    <td><a href="{{$info->dossier_pedagogique}}" download >{{$info->dossier_pedagogique}}</a></td>
                    <td><a href="{{$info->dossier_administratif}}" download >{{$info->dossier_administratif}}</a></td>
                    <td class="badge badge-outline-warning" >{{$info->status}}</td>
                    <td>
                        <a href="{{url('approved',$info->id)}}" class="badge badge-outline-success" >Validé</a>
                    </td>
                    <td>
                        <a href="{{url('canceled',$info->id)}}" class="badge badge-outline-danger">Refuser</a>
                    </td>
                    
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