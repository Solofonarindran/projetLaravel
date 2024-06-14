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
        Schema::create('logement', function (Blueprint $table) {
            $table->id();
            $table->string("numero",80);
            $table->string("typevente",90);
            $table->double("prix");
            $table->foreignId("client_id")->constrained("client")
                                          ->cascadeOnUpdate()
                                          ->cascadeOnDelete();
            
            $table->foreignId("cite_id")->constrained("cite")
                                          ->cascadeOnUpdate()
                                          ->cascadeOnDelete();
            
            
            $table->foreignId("terrain_id")->constrained("terrain")
                                          ->cascadeOnUpdate()
                                          ->cascadeOnDelete();
            
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
        Schema::dropIfExists('logement');
    }
};
