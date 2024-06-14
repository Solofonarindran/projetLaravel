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
        Schema::table('logement', function (Blueprint $table) {
            $table->foreignId('contrat_id')->constrained('contrat')->nullable()->cascadeOnUpdate()->cascadeOnDelete();
            $table->tinyInteger('compte',false,false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logement', function (Blueprint $table) {
            //
        });
    }
};
