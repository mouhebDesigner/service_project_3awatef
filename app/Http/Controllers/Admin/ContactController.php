<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function  index(){   
        $contacts = Contact::paginate(10);
        return view('admin.contact', compact('contacts'));
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect('admin/contacts')->with('deleted', 'Le catalogue a été supprimer avec succés');
        
    }
}
