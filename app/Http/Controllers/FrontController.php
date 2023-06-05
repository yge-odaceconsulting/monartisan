<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use App\Models\Claim;
use App\Models\Type;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.pages.index');
    }

    public function formulaire()
    {
        $assurances=Assurance::all();
        $types=Type::all();
        return view('front.pages.form', compact('assurances','types'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number'=> 'nullable|string|max:255',
            'full_name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'contact_1' => 'nullable|string|max:255',
            'contact_2' => 'nullable|string|max:255',
            'place' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'description' => 'nullable|string',
            'assurance_id' => 'exists:assurances,id',
            'type_id' => 'exists:types,id',
        ]);

        Claim::create($data);

        // Autres opérations ou redirection après l'enregistrement

        return redirect()->route('home')->with('success', 'La réclamation a été enregistrée avec succès.');
    }
}
