<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use App\Models\Pastoral;
use Illuminate\Http\Request;

class PastoralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pastorals = Pastoral::with([
            'member',
            'user'
        ])
            ->latest()
            ->paginate(7);



        $members = Membres::where('status','Actif')
            ->orderBy('first_name')
            ->get();



        return view(
            'pastoral.index',
            compact(
                'pastorals',
                'members'
            )
        );

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
    public function store(Request $request)
    {

        Pastoral::create([

//            'user_id' => auth()->id(),
        'user_id' => 1,

            'member_id' => $request->member_id,

            'discussion' => $request->discussion,

            'observations' => $request->observations,

        ]);


        return back()->with(
            'success',
            'Discussion pastorale enregistrée.'
        );

    }

    /**
     * Display the specified resource.
     */
    public function show(Pastoral $pastoral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pastoral $pastoral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $pastoral = Pastoral::findOrFail($id);


        $pastoral->update([

            'member_id'=>$request->member_id,

            'discussion'=>$request->discussion,

            'observations'=>$request->observations,

        ]);


        return back()->with(
            'success',
            'Discussion modifiée.'
        );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $pastoral = Pastoral::findOrFail($id);


        $pastoral->delete();


        return back()->with(
            'success',
            'Discussion supprimée.'
        );

    }
}
