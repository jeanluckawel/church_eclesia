<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Membres::latest()->paginate(7);

        return view('membres.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

    $validated = $request->validate([

        // Informations personnelles
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',

        'gender' => 'required|in:Masculin,Feminin',

        'email' => 'nullable|email|unique:members,email',

        'phone' => 'nullable|string|max:30',

        'address' => 'nullable|string',

        'birth_date' => 'nullable|date',

        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        // Etat civil
        'marital_status' => 'nullable|string',

        'spouse_name' => 'nullable|string|max:255',

        'marriage_date' => 'nullable|date',

        'marriage_type' => 'nullable|string',

        'children_count' => 'nullable|integer|min:0',

        // Informations ecclésiastiques
        'church_join_date' => 'nullable|date',

        'previous_church' => 'nullable|string|max:255',

        'water_baptism' => 'nullable|boolean',

        'holy_spirit_baptism' => 'nullable|boolean',

        'previous_church_service' => 'nullable|string|max:255',

        'slm_discipleship' => 'nullable|boolean',

        // Profession
        'department' => 'nullable|string|max:255',

        'profession' => 'nullable|string|max:255',

        'professional_skills' => 'nullable|string',

    ]);



    if ($request->hasFile('photo')) {

        $validated['photo'] = $request
            ->file('photo')
            ->store('members', 'public');
    }



    $validated['status'] = 'Actif';

    $validated['water_baptism'] = $request->boolean('water_baptism');

    $validated['holy_spirit_baptism'] = $request->boolean('holy_spirit_baptism');

    $validated['slm_discipleship'] = $request->boolean('slm_discipleship');


    Membres::create($validated);


    return redirect()
        ->back()
        ->with('success', 'Le membre a été enregistré avec succès.');

}

    /**
     * Display the specified resource.
     */
    public function show(Membres $membres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membres $membres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $membre = Membres::findOrFail($id);


        $membre->update([

            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'middle_name'=>$request->middle_name,
            'gender'=>$request->gender,
            'birth_date'=>$request->birth_date,

            'phone'=>$request->phone,
            'address'=>$request->address,

            'marital_status'=>$request->marital_status,
            'spouse_name'=>$request->spouse_name,

            'marriage_date'=>$request->marriage_date,
            'marriage_type'=>$request->marriage_type,

            'children_count'=>$request->children_count,


            'church_join_date'=>$request->church_join_date,
            'previous_church'=>$request->previous_church,
            'previous_church_service'=>$request->previous_church_service,

            'water_baptism'=>$request->water_baptism,
            'holy_spirit_baptism'=>$request->holy_spirit_baptism,
            'slm_discipleship'=>$request->slm_discipleship,


            'department'=>$request->department,
            'profession'=>$request->profession,
            'professional_skills'=>$request->professional_skills,

            'status'=>'active'

        ]);


        return back()->with('success','Membre modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membres $member)
    {
        $member->delete();

        return redirect()
            ->back()
            ->with('success', 'Le membre a été supprimé avec succès.');
    }
}
