<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter Étudiant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">Ajouter Étudiant</h1>
          <hr>
          @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
          @endif
          <ul>
            @foreach ($errors->all() as $error)
              <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
          </ul>
          <form action="/ajouter-etudiant-traitement" method="POST" class="form-group">
            @csrf
            <div class="form-group">
              <label for="Nom">Nom</label>
              <input type="text" class="form-control" id="Nom" name="nom">
            </div>
            <div class="form-group">
              <label for="Prenom">Prénom</label>
              <input type="text" class="form-control" id="Prenom" name="prenom">
            </div>
            <div class="form-group">
              <label for="Class">Classe</label>
              <input type="text" class="form-control" id="Class" name="class">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter Étudiant</button>


          </form>
          <br>
          <a href="/etudiant" class="btn btn-secondary">Revenir à la liste des étudiants</a>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
