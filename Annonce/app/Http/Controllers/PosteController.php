<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;
use Illuminate\Support\Facades\Auth;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $poste = new Poste();
        $poste->Description = $request->input('Description');
        $poste->photo = $request->input('photo');
        $poste->type = $request->input('type');
        $poste->titre = $request->input('titre');
        $poste->tel = $request->input('tel');
        $poste->prix = $request->input('prix');
        $poste->id_utilisateur = $request->input('id_utilisateur');
        $poste->save();
        if ($poste->type === "Annonce") {
            return redirect('/annonces');
        } else {
            return redirect('/demandes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Poste::find($id);
        return view('update', ['post' => $post]);
    }
    // public function affiche()
    // {
    //     $post = Poste::where('id_utilisateur', '=', Auth::user()->id)->paginate(3);
    //     return view('profil', ['post' => $post]);
    // }

    public function affiche(Request $request)
    {
        $search = $request['search'];
        if ($search != "") {
            $post = Poste::where('id_utilisateur', '=', Auth::user()->id)->where('titre', 'like', '%' . $search . '%')->paginate(4);
        } else {

            $post = Poste::where('id_utilisateur', '=', Auth::user()->id)->paginate(4);
        }

        return view('profil', ['post' => $post]);
    }




    public function annonce(Request $request)
    {
        $search = $request['search'];
        if ($search != "") {
            $post = Poste::join('users', 'users.id', '=', 'postes.id_utilisateur')->where('titre', 'like', '%' . $search . '%')->where('type', '=', 'Annonce')->paginate(4);
        } else {

            $post = Poste::join('users', 'users.id', '=', 'postes.id_utilisateur')->where('type', 'Annonce')->paginate(4);
        }

        return view('annonce', ['post' => $post]);
    }
    public function demande(Request $request)
    {
        $search = $request['search'];
        if ($search != "") {
            $post = Poste::join('users', 'users.id', '=', 'postes.id_utilisateur')->where('titre', 'like', '%' . $search . '%')->where('type', '=', 'Ordre')->paginate(4);
        } else {

            $post = Poste::join('users', 'users.id', '=', 'postes.id_utilisateur')->where('type', 'Ordre')->paginate(4);
        }

        return view('demande', ['post' => $post]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Poste::find($id);
        return view('poste.edit', ['post' => $post]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $poste = Poste::find($id);
        $poste->Description = $request->input('Description');
        $poste->photo = $request->input('photo');
        $poste->type = $request->input('type');
        $poste->titre = $request->input('titre');
        $poste->tel = $request->input('tel');
        $poste->prix = $request->input('prix');
        $poste->id_utilisateur = $request->input('id_utilisateur');
        $poste->save();
        // return view('/profil');
        return redirect('/profil');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poste = Poste::find($id);
        $poste->delete();
        return redirect('/profil');
    }

    // delete all postes
    public function deleteAll()
    {
        $postes = Poste::all();
        $postes->delete();
        return redirect('/annonce');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $post = Poste::where('titre', 'like', '%' . $search . '%')->paginate(4);
        return view('search', ['post' => $post]);
    }
}
