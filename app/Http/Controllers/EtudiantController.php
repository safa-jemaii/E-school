<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
     public function getEtudiant()
     {
         $etudiants = Etudiant::all();
         return view('etudiant.liste', compact('etudiants'));
    }




    public function getEtudiantsAPI()
    {
        $etudiants = Etudiant::all();
        return response()->json($etudiants);
    }




    public function addEtudiant()
    {
        return view('etudiant.ajouter');
    }

    // public function ajouter_etudiant_traitement(Request $request)
    // {
    // $request->validate([
    //     'nom' => 'required',
    //     'prenom' => 'required',
    //     'class' => 'required'
    // ]);


    // $etudiant = new Etudiant();
    // $etudiant->nom = $request->nom;
    // $etudiant->prenom = $request->prenom;
    // $etudiant->class = $request->class;

    // $etudiant->save();
    // return redirect('/ajouter')->with('status', 'L\'étudiant a bien ajouté avec succees.');

    // }


    public function ajouter_etudiant_traitement(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'class' => 'required'
    ]);

    $etudiant = new Etudiant();
    $etudiant->nom = $request->nom;
    $etudiant->prenom = $request->prenom;
    $etudiant->class = $request->class;

    if ($etudiant->save()) {
        // Student added successfully, return a JSON response with a 201 status code.
        return response()->json(['message' => 'L\'étudiant a bien été ajouté avec succès.'], 201);
    } else {
        // An error occurred, return a JSON response with a 500 status code.
        return response()->json(['message' => 'Erreur lors de l\'ajout de l\'étudiant.'], 500);
    }
}






public function update_etudiant($id){
    $etudiants = Etudiant::find($id);
    return view('etudiant.update', compact('etudiants'));
}


// public function update_etudiant_traitement(Request $request){

//     $request->validate([
//         'id' => 'required',
//         'nom' => 'required',
//         'prenom' => 'required',
//         'class' => 'required'
//     ]);

// //find the student by id
// // dd($request->all());
//     $etudiant = Etudiant::find($request->id);

//     if(!$etudiant){
//      // Handle the case where the student is not found
//      return redirect('/etudiant')->with('error', 'Étudiant introuvable.');
//     }

//     //update the student
//     $etudiant->nom = $request->nom;
//     $etudiant->prenom = $request->prenom;
//     $etudiant->class = $request->class;

//     $etudiant->update();
//     return redirect('/etudiant')->with('status', 'L\'étudiant a bien modifié avec succees.');


// }


public function update_etudiant_traitement(Request $request)
{
    $request->validate([
        'id' => 'required',
        'nom' => 'required',
        'prenom' => 'required',
        'class' => 'required'
    ]);
    // dd($request->all());
    $etudiant = Etudiant::find($request->id);

    if (!$etudiant) {
        return response()->json(['message' => 'Étudiant introuvable.'], 404);
    }

    $etudiant->nom = $request->nom;
    $etudiant->prenom = $request->prenom;
    $etudiant->class = $request->class;

    if ($etudiant->save()) {
        return response()->json(['message' => 'L\'étudiant a bien été modifié avec succès.'], 200);

    } else {
        return response()->json(['message' => 'Erreur lors de la modification de l\'étudiant.'], 500);
    }
}



// public function update_etudiant_traitement(Request $request){
//     $request->validate([
//         'nom' => 'required',
//         'prenom' => 'required',
//         'class' => 'required'
//     ]);

//     $etudiant = Etudiant::find($request->id);

//     if ($etudiant) {
//         $etudiant->update([
//             'nom' => $request->nom,
//             'prenom' => $request->prenom,
//             'class' => $request->class,
//         ]);

//         return redirect('/etudiant')->with('status', "L'étudiant a bien été modifié avec succès.");
//     } else {
//         return redirect('/etudiant')->with('error', "Étudiant non trouvé.");
//     }
// }

public function delete_etudiant($id){
    $etudiant = Etudiant::find($id);
    $etudiant->delete();
    return redirect('/etudiant')->with('status', 'L\'étudiant a bien supprimé avec succees.');

}

}
