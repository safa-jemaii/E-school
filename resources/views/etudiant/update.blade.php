<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Modifier Etudiant</title>
  </head>
  <body>

    <div class="container text-center">
        <div class="row">
        <div class="col s12">

        <h1>Ajouter Etudiant</h1>
        <hr>

        @if (session('status'))
        <div class="alert alert-success"></div>
        {{ session('status') }}
        @endif

<ul>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{ $error }}</li>
    @endforeach
</ul>


        <form action="/update/traitement" method="POST" class="form-group">
  @csrf

  <!-- <input type="text" name="id" style="display: none;" value="{$etudiants->id}}"> -->


  <input type="hidden" name="id" value="{{ $etudiants->id }}">

  <div class="form-group">
 <label for="Nom">Nom</label>
    <input type="text" class="form-control" id="Nom" name="nom" value="{{$etudiants->nom}}">
  </div>

  <div class="form-group">
    <label for="Prenom" >prenom</label>
    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{$etudiants->prenom}}">
  </div>

  <div class="form-group">
    <label for="Class" >Class</label>
    <input type="text" class="form-control" id="Class" name="class" value="{{$etudiants->class}}">
  </div>
  <button type="submit" class="btn btn-primary">modifier etudiant</button>

  <br>

</form>



    </div>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <a href="/etudiant"  class="btn btn-default">Revenir à la liste des étudiants</a>

  </body>
</html>
