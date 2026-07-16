<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // ======================
        // SUPER ADMIN
        // ======================

        $admin = Role::create([
            'name'=>'Super Admin',
            'guard_name'=>'web'
        ]);



        $admin->givePermissionTo(
            Permission::all()
        );






        // ======================
        // PASTEUR
        // ======================

        $pasteur = Role::create([
            'name'=>'Pasteur',
            'guard_name'=>'web'
        ]);



        $pasteur->givePermissionTo([


            'dashboard.view',


            'members.view',
            'members.create',
            'members.edit',


            'visitors.view',
            'visitors.convert',


            'pastoral.view',
            'pastoral.create',
            'pastoral.edit',


            'reports.view',
            'reports.members',
            'reports.attendance'


        ]);







        // ======================
        // SECRETAIRE
        // ======================


        $secretary = Role::create([
            'name'=>'Secrétaire',
            'guard_name'=>'web'
        ]);



        $secretary->givePermissionTo([


            'dashboard.view',


            'members.view',
            'members.create',
            'members.edit',


            'visitors.view',
            'visitors.create',
            'visitors.edit',


            'attendance.view',
            'attendance.create',


        ]);







        // ======================
        // TRESORIER
        // ======================


        $treasurer = Role::create([

            'name'=>'Trésorier',

            'guard_name'=>'web'

        ]);



        $treasurer->givePermissionTo([


            'dashboard.view',


            'finance.view',


            'income.view',
            'income.create',
            'income.edit',


            'expense.view',
            'expense.create',
            'expense.edit',


            'finance.report'


        ]);








        // ======================
        // RESPONSABLE
        // ======================


        $leader = Role::create([

            'name'=>'Responsable',

            'guard_name'=>'web'

        ]);



        $leader->givePermissionTo([


            'dashboard.view',


            'members.view',


            'attendance.view',
            'attendance.create',


            'departments.view'


        ]);




    }
}
