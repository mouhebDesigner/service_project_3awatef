<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\CommandeVoiture;
use App\Http\Requests\CommandeVoitureRequest;

class CommandeVoitureController extends Controller
{
    public function edit($id){
        
        $commande = CommandeVoiture::find($id);

        return view('commandes.edit_voiture', compact('commande'));
    }

    public function update(CommandeVoitureRequest $request, $id){
        $commande = CommandeVoiture::find($id);

        $commande->adresse = $request->adresse;
        $commande->date = $request->date;
        $commande->type_lavage = $request->type_lavage;
        $commande->type_voiture = $request->type_voiture;

        $commande->save();

        return redirect('commandes');
    }
}
