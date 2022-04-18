<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('N_CIN')->nullable();
            $table->string('N_DRPP')->nullable();
            $table->string('specialite')->nullable();
            $table->string('date_de_recrutement')->nullable();
            $table->string('status')->nullable();
            $table->string('dossier_pedagogique')->nullable();
            $table->string('dossier_administratif')->nullable();
            $table->string('dossier_scientifique')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
};
