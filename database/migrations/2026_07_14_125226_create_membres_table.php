<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();


            $table->string('email')->unique()->nullable();

            $table->enum('gender', ['Masculin', 'Feminin']);

            $table->string('phone')->nullable();
            $table->text('address')->nullable();

            // Etat civil
            $table->enum('marital_status', [
                'Célibataire',
                'Marié(e)',
                'Divorcé(e)',
                'Veuf(ve)'
            ])->nullable();

            $table->string('spouse_name')->nullable();

            $table->date('marriage_date')->nullable();

            $table->enum('marriage_type', [
                'Civil',
                'Religieux',
                'Coutumier',
                'Civil + Religieux',
                'Autre'
            ])->nullable();

            $table->unsignedInteger('children_count')->default(0);

            // Informations ecclésiastiques
            $table->date('church_join_date')->nullable();

            $table->string('previous_church')->nullable();

            $table->boolean('water_baptism')->default(false);

            $table->boolean('holy_spirit_baptism')->default(false);

            $table->string('previous_church_service')->nullable();

            $table->boolean('slm_discipleship')->default(false);

            // Département
            $table->string('department')->nullable();

            // Profession
            $table->string('profession')->nullable();

            $table->text('professional_skills')->nullable();

            // Date d'anniversaire
            $table->date('birth_date')->nullable();

            $table->string('photo')->nullable();

            $table->string('status')->nullable();


            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};
