<?php

namespace Database\Factories;

use App\Models\Membres;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MembresFactory extends Factory
{
    protected $model = Membres::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'middle_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['Masculin', 'Feminin']),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'marital_status' => $this->faker->randomElement([ 'Célibataire',
                'Marié(e)',
                'Divorcé(e)',
                'Veuf(ve)']),
            'spouse_name' => $this->faker->name(),
            'marriage_date' => Carbon::now(),
            'marriage_type' => $this->faker->randomElement([
                'Civil',
                'Religieux',
                'Coutumier',
                'Civil + Religieux',
                'Autre'
            ]),
            'children_count' => $this->faker->randomNumber(),
            'church_join_date' => Carbon::now(),
            'previous_church' => $this->faker->word(),
            'water_baptism' => $this->faker->boolean(),
            'holy_spirit_baptism' => $this->faker->boolean(),
            'previous_church_service' => $this->faker->word(),
            'slm_discipleship' => $this->faker->boolean(),
            'department' => $this->faker->word(),
            'profession' => $this->faker->word(),
            'professional_skills' => $this->faker->word(),
            'status' => $this->faker->randomElement(['Actif', 'Inactif']),
            'birth_date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
