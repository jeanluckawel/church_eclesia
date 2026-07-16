<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use App\Models\User;
use App\Models\Pastoral;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        return view('dashboard',[


            // Membres
            'membersCount' => Membres::count(),


            // Membres actifs
            'activeMembersCount' => Membres::where(
                'status',
                'Actif'
            )->count(),


            // Membres inactifs
            'inactiveMembersCount' => Membres::where(
                'status',
                'Inactif'
            )->count(),



            // Suivi pastoral
            'pastoralCount' => Pastoral::count(),



            // Utilisateurs système
            'usersCount' => User::count(),



            // visiteurs (sera remplacé quand module créé)
            'visitorsCount' => 0,



            // finances futur module
            'financeCount' => 0,



            // cultes futur module
            'servicesCount' => 0,



            // présences futur module
            'attendanceCount' => 0,


            // rapports
            'reportsCount' => 0,






        ]);

    }

}
