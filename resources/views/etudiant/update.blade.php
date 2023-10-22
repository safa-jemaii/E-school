<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Etudiant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-rAglnHIkpkSDJFNCNXrjUziWZZIYoF8f4NF3E5K2LEd3w9GDz3ZlLRf/d5pl2V8"
        crossorigin="anonymous">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .alert {
            padding: 10px;
            margin: 10px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input.form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button.btn-primary {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        a.btn-default {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ccc;
            border: none;
            border-radius: 5px;
            color: #333;
            text-decoration: none;
            display: inline-block;
        }

        a.btn-default:hover {
            background-color: #999;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Modifier Etudiant</h1>
                <hr>

                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>

                <form action="/update-etudiant-traitement" method="POST" class="form-group">
                @method('PUT')

                    @csrf

                    <!-- <input type="text" name="id" style="display: none;" value="{$etudiants->id}}"> -->

                    <input type="hidden" name="id" value="{{ $etudiants->id }}">


                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">
                    </div>

                    <div class="form-group">
                        <label for="Prenom">prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">
                    </div>

                    <div class="form-group">
                        <label for="Class">Class</label>
                        <input type="text" class="form-control" id="Class" name="class" value="{{ $etudiants->class }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier Etudiant</button>

                    <br>
                </form>
            </div>
        </div>
    </div>
    <a href="/etudiant" class="btn btn-default">Revenir à la liste des étudiants</a>
</body>
</html>
