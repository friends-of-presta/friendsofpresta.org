<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['A attribuer', 'création en cours', 'en ligne', 'abandonné'])->default('A attribuer');
            $table->string('nom')->default('');
            $table->string('prenom')->default('');
            $table->string('telephone')->default('');
            $table->string('email')->default('');
            $table->string('siren')->default('');
            $table->string('societe')->default('');
            $table->enum('salaries', ['0-20', '21-50', '50-'])->default('0-20');
            $table->enum('statut', ['SARL', 'SASU', 'SAS', 'EURL', 'EI', 'Micro', 'Autre'])->default('Autre');
            $table->string('adresse')->default('');
            $table->string('cp')->default('');
            $table->string('ville')->default('');
            $table->longText('commentaires')->default('');
            $table->longText('admin')->default('');
            $table->string('url')->default('');
            $table->unsignedBigInteger('attribution')->nullable();
            $table->timestamps();

            $table->foreign('attribution')->onDelete('set null')->onUpdate('cascade')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
