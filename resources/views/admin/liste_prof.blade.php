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
            <div class="container" >
                
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">professeur</th>
                    <th scope ="col">dossier scientifique</th>
                    <th scope ="col">dossier pedagogique</th>
                    <th scope ="col">dossier Administratif</th>
                    <th scope="col">supprimer</th>
                    <th scope="col">modifier</th>
                  </tr>
                </thead>
                <tbody id="classecontent">
                </tbody>
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