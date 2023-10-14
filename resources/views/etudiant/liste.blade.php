<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liste Etudiant</title>
  </head>
  <body>

    <div class="container text-center">
        <div class="row">
        <div class="col s12">
        <h1>hey student</h1>
    <a href="/ajouter" class="btn btn-primary">Add  student</a>
<hr>

@if (session('status'))
        <div class="alert alert-success"></div>
        {{ session('status') }}
        @endif
    <table class="table">
        <thead>
            <tr>

            <th>#</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Class</th>
            <th>Actions</th>
</tr>

</thead>
<tbody>
    @foreach($etudiants as $etudiant)
    <tr>
        <td>{{$etudiant->id}}</td>
        <td>{{$etudiant->nom}}</td>
        <td>{{$etudiant->prenom}}</td>
        <td>{{$etudiant->class}}</td>

        <td>
        <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-default">Update</a>
        <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Delete</a>

</td>
</tr>
@endforeach

</tbody>

    </table>

    </div>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
