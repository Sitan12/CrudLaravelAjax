<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
        public function store(Request $request)
        {
            $stagiaire = new Stagiaire();
            $stagiaire->name = $request->name;
            $stagiaire->numero = $request->numero;
            $stagiaire->adresse = $request->adresse;
            $stagiaire->save();
            return response()->json($stagiaire);
        }

        public function destroy($id)
        {
            $stagiaire = Stagiaire::find($id);
            $stagiaire->delete();
            return response()->json($stagiaire);
        }
        public function update(Request $request, $id)
            {
                $stagiaire = Stagiaire::find($id);
                $stagiaire->name = $request->nameS;
                $stagiaire->numero = $request->numeroS;
                $stagiaire->adresse = $request->adresseS;
                // dd($id);
                $stagiaire->update($request->all());
                return Response()->json($stagiaire);
            }


}
