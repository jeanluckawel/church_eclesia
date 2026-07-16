<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [


            // =========================
            // DASHBOARD
            // =========================

            'dashboard.view',



            // =========================
            // PROFIL
            // =========================

            'profile.view',
            'profile.edit',




            // =========================
            // MEMBRES
            // =========================

            'members.view',
            'members.create',
            'members.edit',
            'members.delete',

            'members.activate',
            'members.deactivate',




            // =========================
            // VISITEURS
            // =========================

            'visitors.view',
            'visitors.create',
            'visitors.edit',
            'visitors.delete',

            'visitors.convert',





            // =========================
            // SUIVI PASTORAL
            // =========================

            'pastoral.view',
            'pastoral.create',
            'pastoral.edit',
            'pastoral.delete',




            // =========================
            // FINANCES
            // =========================

            'finance.view',

            'income.view',
            'income.create',
            'income.edit',
            'income.delete',


            'expense.view',
            'expense.create',
            'expense.edit',
            'expense.delete',



            'finance.report',





            // =========================
            // CULTES
            // =========================


            'services.view',
            'services.create',
            'services.edit',
            'services.delete',





            // =========================
            // PRESENCES
            // =========================


            'attendance.view',
            'attendance.create',
            'attendance.edit',
            'attendance.delete',





            // =========================
            // DEPARTEMENTS / MINISTERES
            // =========================


            'departments.view',
            'departments.create',
            'departments.edit',
            'departments.delete',





            // =========================
            // RAPPORTS
            // =========================


            'reports.view',
            'reports.members',
            'reports.finance',
            'reports.attendance',





            // =========================
            // UTILISATEURS
            // =========================


            'users.view',
            'users.create',
            'users.edit',
            'users.delete',




            // =========================
            // ROLES
            // =========================


            'roles.view',
            'roles.create',
            'roles.edit',
            'roles.delete',


            'roles.permissions',





            // =========================
            // PARAMETRES
            // =========================


            'settings.view',
            'settings.edit',
            ];


        foreach ($permissions as $permission) {


            Permission::create([

                'name'=>$permission,

                'guard_name'=>'web'

            ]);


        }
    }
}
