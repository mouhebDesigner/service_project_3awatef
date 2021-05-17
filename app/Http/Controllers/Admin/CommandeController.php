<?php

namespace App\Http\Controllers\Admin;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Models\CommandeVoiture;
use App\Http\Controllers\Controller;

class CommandeController extends Controller
{
    public function index(){
        
        $commandes = Commande::paginate(10);


        return view('admin.commandes.index', compact('commandes'));
    }
    public function voiture(){

        $commandes = CommandeVoiture::paginate(10);


        return view('admin.commandes.voiture', compact('commandes'));
    }
    
    public function accepter($commande_id){
        $commande = Commande::find($commande_id);

        $commande->approuver = 'oui';

        $commande->save();

        return redirect('admin/commandes')->with('accepted', 'La commande a été accepté avec succée');
    }
    public function refuser($commande_id){
        $commande = Commande::find($commande_id);

        $commande->approuver = 'non';

        $commande->save();

        return redirect('admin/commandes')->with('accepted', 'La commande a été refusé avec succée');
    }
    public function accepterVoiture($commande_id){
        $commande = CommandeVoiture::find($commande_id);

        $commande->approuver = 'oui';

        $commande->save();

        return redirect('admin/commandes')->with('accepted', 'La commande a été accepté avec succée');
    }
    public function refuserVoiture($commande_id){
        $commande = CommandeVoiture::find($commande_id);

        $commande->approuver = 'non';

        $commande->save();

        return redirect('admin/commandesVoiture')->with('accepted', 'La commande a été refusé avec succée');
    }
}
